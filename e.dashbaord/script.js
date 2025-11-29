// Engineer Dashboard interactions (no libraries)
document.addEventListener('DOMContentLoaded', function () {
  // footer year
  const y = document.getElementById('year');
  if (y) y.textContent = new Date().getFullYear();

  // Auto-fill img src from data-default if src empty; fallback inline SVG
  function placeholderSVG(w = 120, h = 120) {
    return 'data:image/svg+xml;utf8,' + encodeURIComponent(
      `<svg xmlns='http://www.w3.org/2000/svg' width='${w}' height='${h}' viewBox='0 0 ${w} ${h}'>
         <rect width='100%' height='100%' rx='12' fill='#f4f7fb'/>
         <g fill='#d1dbe8'>
           <circle cx='${w/2}' cy='${h*0.35}' r='${Math.min(w,h)*0.18}'/>
           <rect x='${w*0.2}' y='${h*0.65}' width='${w*0.6}' height='${h*0.12}' rx='8'/>
         </g>
       </svg>`
    );
  }

  document.querySelectorAll('img[data-default]').forEach(img => {
    const hasSrc = img.getAttribute('src') && img.getAttribute('src').trim() !== '';
    if (!hasSrc && img.dataset.default && img.dataset.default.trim() !== "") {
      img.src = img.dataset.default;
    } else if (!hasSrc) {
      img.src = placeholderSVG();
    }
    img.onerror = function () { this.onerror = null; this.src = placeholderSVG(); };
  });

  // Save profile (demo)
  document.getElementById('saveProfile')?.addEventListener('click', function () {
    alert('Profile saved (demo).');
  });
  document.getElementById('cancelProfile')?.addEventListener('click', function () {
    alert('Changes canceled (demo).');
  });

  // Upload license
  document.getElementById('uploadLicense')?.addEventListener('click', function () {
    const fileInput = document.getElementById('licenseFile');
    if (!fileInput || !fileInput.files || fileInput.files.length === 0) {
      alert('Please select a file to upload.');
      return;
    }
    // Demo: mark verified after fake upload
    const statusSpan = document.querySelector('.license-row .status');
    statusSpan.textContent = 'Pending';
    statusSpan.className = 'status pending';
    alert('License uploaded (demo). Verification pending.');
  });

  // Add new package (demo)
  document.getElementById('addPackage')?.addEventListener('click', function () {
    alert('Add Package (demo).');
  });

  // Booking actions
  document.querySelectorAll('.bookings-list .accept').forEach(b => {
    b.addEventListener('click', function () {
      const li = this.closest('li');
      this.disabled = true;
      this.textContent = 'Accepted';
      this.classList.remove('btn-primary');
      this.style.opacity = '0.8';
      // demo: mark accepted visually
      const rejectBtn = li.querySelector('.reject');
      if (rejectBtn) rejectBtn.remove();
    });
  });
  document.querySelectorAll('.bookings-list .reject').forEach(b => {
    b.addEventListener('click', function () {
      const li = this.closest('li');
      li.remove();
    });
  });

  // Messages: send
  document.getElementById('sendMsg')?.addEventListener('click', function () {
    const input = document.getElementById('msgText');
    if (!input || !input.value.trim()) return alert('Type a message first.');
    const container = document.querySelector('.messages');
    const bubble = document.createElement('div');
    bubble.className = 'msg right';
    bubble.innerHTML = `<div class="msg-text">${escapeHtml(input.value)}</div><div class="msg-time">Just now</div>`;
    container.appendChild(bubble);
    input.value = '';
    bubble.scrollIntoView({ behavior: 'smooth' });
  });

  // reply buttons in reviews
  document.querySelectorAll('.reviews-card .btn-outline').forEach(btn => {
    btn.addEventListener('click', function () {
      const ta = this.closest('.review')?.querySelector('textarea');
      if (!ta) return;
      alert('Reply posted (demo): ' + ta.value);
      ta.value = '';
    });
  });

  // helper: basic escape for inserted messages
  function escapeHtml(s) {
    return s.replace(/[&<>"']/g, function (m) { return ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[m]); });
  }
});
