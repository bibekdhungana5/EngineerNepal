// Basic demo data and rendering
document.addEventListener('DOMContentLoaded', function () {
  const year = document.getElementById('year');
  if (year) year.textContent = new Date().getFullYear();

  const engineers = [
    { name:'Dr. Anish Sharma', role:'Civil Engineer', license:'NEPEC-12345', city:'Kathmandu', rating:4.8, price:3000, img:'images/a1.jpg' },
    { name:'Er. Bimala Rai', role:'Architectural Designer', license:'NEPEC-67890', city:'Lalitpur', rating:4.9, price:3500, img:'images/a2.jpg' },
    { name:'Mr. Ramesh Thapa', role:'Structural Engineer', license:'NEPEC-11223', city:'Bhaktapur', rating:4.7, price:4000, img:'images/a3.jpg' },
    { name:'Er. Sita Gurung', role:'Electrical Engineer', license:'NEPEC-44556', city:'Pokhara', rating:4.6, price:2800, img:'images/a4.jpg' },
    { name:'Dr. Kamal Dahal', role:'Surveying Engineer', license:'NEPEC-77889', city:'Biratnagar', rating:4.5, price:2500, img:'images/a5.jpg' },
    { name:'Er. Pooja Karki', role:'Civil Engineer', license:'NEPEC-99001', city:'Kathmandu', rating:4.9, price:3200, img:'images/a6.jpg' },
    { name:'Mr. Rajan Bhattarai', role:'Architectural Designer', license:'NEPEC-00112', city:'Lalitpur', rating:4.7, price:3800, img:'images/a7.jpg' },
    { name:'Er. Sabina Tamang', role:'Structural Engineer', license:'NEPEC-22334', city:'Pokhara', rating:4.8, price:4100, img:'images/a8.jpg' },
    { name:'Dr. Dipak Yadav', role:'Urban Planning', license:'NEPEC-55667', city:'Kathmandu', rating:4.5, price:3100, img:'images/a9.jpg' }
  ];

  const cards = document.getElementById('cards');
  const countEl = document.getElementById('count');

  function render(list) {
    cards.innerHTML = '';
    list.forEach(item => {
      const el = document.createElement('article');
      el.className = 'card';
      el.innerHTML = `
        <img class="avatar" src="${item.img}" alt="${item.name}" onerror="this.onerror=null;this.src='./assets/images/clipboard_image_4f07a0aa1a84d5bc.png'">
        <div class="name">${item.name}</div>
        <div class="role">${item.role}</div>
        <div class="license">Verified License:${item.license}</div>
        <div class="location">📍 ${item.city}</div>
        <div class="rating">★ ${item.rating} <span style="color:#6b7280;font-weight:600;color:#6b7280;font-weight:600;margin-left:8px">(Reviews)</span></div>
        <div class="price">NPR ${item.price.toLocaleString()}/hr</div>
        <div class="buttons">
          <button class="btn-outline" data-name="${item.name}">View Profile</button>
          <button class="btn-solid" data-name="${item.name}">Book Now</button>
        </div>
      `;
      cards.appendChild(el);
    });
    if (countEl) countEl.textContent = list.length;
  }

  // initial render
  render(engineers);

  // reset filters
  document.getElementById('resetFilters').addEventListener('click', function () {
    // clear inputs / checkboxes
    document.querySelectorAll('.filters input').forEach(i => {
      if (i.type === 'checkbox' || i.type === 'radio') i.checked = false;
      if (i.type === 'text') i.value = '';
      if (i.type === 'range') i.value = i.max;
    });
    // default radio choose first for experience and rating
    document.querySelectorAll('.radio-list input').forEach((r,i) => { if(i===0) r.checked = true; });
    render(engineers);
  });

  // example: filter by price range slider
  const priceRange = document.getElementById('priceRange');
  if (priceRange) {
    priceRange.addEventListener('input', function () {
      const maxPrice = Number(this.value);
      const filtered = engineers.filter(e => e.price <= maxPrice);
      render(filtered);
    });
  }

  // card button actions
  cards.addEventListener('click', function (e) {
    const btn = e.target.closest('button');
    if (!btn) return;
    const name = btn.getAttribute('data-name');
    if (btn.classList.contains('btn-outline')) {
      alert('Open profile (demo): ' + name);
    } else {
      alert('Book now (demo): ' + name);
    }
  });

  // smooth anchors (if any)
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      e.preventDefault();
      const t = document.querySelector(a.getAttribute('href'));
      if (t) t.scrollIntoView({ behavior:'smooth' });
    });
  });
});
