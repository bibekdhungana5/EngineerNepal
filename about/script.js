
document.addEventListener('DOMContentLoaded', function () {
  
  document.getElementById('year').textContent = new Date().getFullYear();


  const revealItems = document.querySelectorAll('.two-col, .values, .committed');
  const obs = new IntersectionObserver(entries => {
    entries.forEach(ent => {
      if (ent.isIntersecting) {
        ent.target.classList.add('in-view');
        obs.unobserve(ent.target);
      }
    });
  }, { threshold: 0.12 });
  revealItems.forEach(i => obs.observe(i));

  
 
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) target.scrollIntoView({ behavior: 'smooth' });
    });
  });
});
