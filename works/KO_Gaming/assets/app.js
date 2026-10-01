const glow=document.querySelector('.cursor-glow');
document.addEventListener('mousemove',e=>{
  if(glow){glow.style.left=e.clientX+'px';glow.style.top=e.clientY+'px';}
});
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const el=document.querySelector(a.getAttribute('href'));
    if(el){e.preventDefault();el.scrollIntoView({behavior:'smooth'});}
  });
});
const menu=document.querySelector('.menu-btn');
const nav=document.querySelector('nav');
if(menu) menu.addEventListener('click',()=>{nav.style.display=nav.style.display==='flex'?'none':'flex';nav.style.position='absolute';nav.style.top='82px';nav.style.left='0';nav.style.right='0';nav.style.padding='25px';nav.style.background='#090a0d';nav.style.flexDirection='column';nav.style.margin='0';});
