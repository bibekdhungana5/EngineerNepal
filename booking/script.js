// basic interactions (no libraries)
document.addEventListener('DOMContentLoaded', function () {
  // year in footer
  const year = document.getElementById('year');
  if (year) year.textContent = new Date().getFullYear();

  // Auto-fill img src from data-default if src is empty.
  document.querySelectorAll('img[data-default]').forEach(img => {
    const hasSrc = img.getAttribute('src') && img.getAttribute('src').trim() !== '';
    if (!hasSrc && img.dataset.default && img.dataset.default.trim() !== "") {
      img.src = img.dataset.default;
    }

    // fallback: if still no src, set inline SVG placeholder as src via data URL
    if (!img.src || img.src.trim() === "") {
      const svg = encodeURIComponent(`
        <svg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'>
          <rect fill='#f4f7fb' width='120' height='120' rx='60'/>
          <g fill='#d1dbe8'>
            <circle cx='60' cy='46' r='20'/>
            <rect x='24' y='76' width='72' height='12' rx='6'/>
          </g>
        </svg>
      `);
      img.src = 'data:image/svg+xml;charset=utf-8,' + svg;
    }

    // onerror fallback to same SVG (for extra safety)
    img.onerror = function () {
      this.onerror = null;
      const svg = encodeURIComponent(`
        <svg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'>
          <rect fill='#f4f7fb' width='120' height='120' rx='60'/>
          <g fill='#d1dbe8'>
            <circle cx='60' cy='46' r='20'/>
            <rect x='24' y='76' width='72' height='12' rx='6'/>
          </g>
        </svg>
      `);
      this.src = 'data:image/svg+xml;charset=utf-8,' + svg;
    };
  });

  // Book button action (demo)
  const confirmBtn = document.getElementById('confirmBooking');
  confirmBtn && confirmBtn.addEventListener('click', function (e) {
    e.preventDefault();
    alert('Booking confirmed (demo).');
  });

  // view profile action (demo)
  const viewBtn = document.getElementById('viewProfile');
  viewBtn && viewBtn.addEventListener('click', function () {
    alert('Open engineer profile (demo).');
  });
});
