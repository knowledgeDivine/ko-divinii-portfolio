// BYI 3D hero — lightweight Three.js scene, works from XAMPP with CDN access.
(() => {
 const host=document.getElementById('hero3d'); if(!host || typeof THREE==='undefined') return;
 const scene=new THREE.Scene();
 const camera=new THREE.PerspectiveCamera(38,innerWidth/innerHeight,.1,100); camera.position.set(0,1.1,7);
 const renderer=new THREE.WebGLRenderer({alpha:true,antialias:true}); renderer.setPixelRatio(Math.min(devicePixelRatio,2)); renderer.setSize(innerWidth,innerHeight); host.appendChild(renderer.domElement);
 const group=new THREE.Group(); scene.add(group);
 const bodyMat=new THREE.MeshStandardMaterial({color:0x171717,metalness:.85,roughness:.18});
 const accent=new THREE.MeshStandardMaterial({color:0xd9ff43,metalness:.6,roughness:.22});
 const glass=new THREE.MeshStandardMaterial({color:0x080b0b,metalness:.35,roughness:.08,transparent:true,opacity:.8});
 const body=new THREE.Mesh(new THREE.SphereGeometry(1.6,48,24,0,Math.PI*2,0,Math.PI*.52),bodyMat); body.scale.set(1.9,.65,1.15); body.position.y=.35; group.add(body);
 const hood=new THREE.Mesh(new THREE.BoxGeometry(2.7,.18,1.55),bodyMat); hood.position.set(.45,.38,0); hood.rotation.z=-.03; group.add(hood);
 const cabin=new THREE.Mesh(new THREE.SphereGeometry(1,32,16),glass); cabin.scale.set(1.1,.5,.9); cabin.position.set(-.65,.82,0); group.add(cabin);
 const line=new THREE.Mesh(new THREE.BoxGeometry(2.9,.035,.045),accent); line.position.set(.1,.47,.79); group.add(line);
 [-1.15,1.15].forEach(z=>{const w=new THREE.Mesh(new THREE.CylinderGeometry(.42,.42,.18,40),new THREE.MeshStandardMaterial({color:0x050505,metalness:.3,roughness:.5}));w.rotation.x=Math.PI/2;w.position.set(.15,.12,z);group.add(w)});
 const floor=new THREE.Mesh(new THREE.PlaneGeometry(20,20),new THREE.MeshBasicMaterial({color:0x080808,transparent:true,opacity:.7}));floor.rotation.x=-Math.PI/2;floor.position.y=-.3;scene.add(floor);
 const p1=new THREE.PointLight(0xd9ff43,4,9);p1.position.set(3,4,4);scene.add(p1); const p2=new THREE.PointLight(0xffffff,2,8);p2.position.set(-4,2,-3);scene.add(p2);
 function resize(){camera.aspect=innerWidth/innerHeight;camera.updateProjectionMatrix();renderer.setSize(innerWidth,innerHeight)} addEventListener('resize',resize);
 addEventListener('pointermove',e=>{group.rotation.y+=(e.clientX/innerWidth-.5)*.18-group.rotation.y*.03;group.rotation.x+=(e.clientY/innerHeight-.5)*-.06-group.rotation.x*.03});
 function animate(t){group.rotation.y+=.0018; group.position.y=Math.sin(t*.0008)*.05;renderer.render(scene,camera);requestAnimationFrame(animate)} requestAnimationFrame(animate);
})();
