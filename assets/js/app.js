const body=document.body;
const menu=document.querySelector('.menu');
const nav=document.querySelector('.nav');
if(menu){menu.setAttribute('aria-label','Open navigation');menu.setAttribute('aria-expanded','false');menu.addEventListener('click',()=>{const open=body.classList.toggle('nav-open');menu.setAttribute('aria-expanded',String(open));menu.textContent=open?'×':'☰';});}
document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',()=>{body.classList.remove('nav-open');if(menu){menu.setAttribute('aria-expanded','false');menu.textContent='☰';}}));
window.addEventListener('resize',()=>{if(window.innerWidth>800){body.classList.remove('nav-open');if(menu){menu.setAttribute('aria-expanded','false');menu.textContent='☰';}}});
