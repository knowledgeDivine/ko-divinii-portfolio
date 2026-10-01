const topbar = document.getElementById('topbar');
const menuBtn = document.getElementById('menuBtn');
const mainNav = document.getElementById('mainNav');
const cursorGlow = document.getElementById('cursorGlow');

window.addEventListener('scroll', () => topbar?.classList.toggle('scrolled', window.scrollY > 30));
menuBtn?.addEventListener('click', () => mainNav?.classList.toggle('open'));

document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (!target) return;
    e.preventDefault(); target.scrollIntoView({behavior:'smooth'}); mainNav?.classList.remove('open');
  });
});

if (cursorGlow && matchMedia('(pointer:fine)').matches) {
  window.addEventListener('pointermove', e => {
    cursorGlow.animate({left: e.clientX + 'px', top: e.clientY + 'px'}, {duration:260, fill:'forwards', easing:'cubic-bezier(.2,.8,.2,1)'});
  });
}

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => { if(entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }});
}, {threshold:.12});
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

document.querySelectorAll('[data-tilt]').forEach(card => {
  card.addEventListener('pointermove', e => {
    const r = card.getBoundingClientRect();
    const x = (e.clientX-r.left)/r.width-.5, y=(e.clientY-r.top)/r.height-.5;
    card.style.transform = `perspective(900px) rotateX(${(-y*3).toFixed(2)}deg) rotateY(${(x*4).toFixed(2)}deg) translateY(-3px)`;
  });
  card.addEventListener('pointerleave', () => card.style.transform = '');
});

setTimeout(() => document.querySelectorAll('.toast').forEach(t => t.remove()), 4800);
