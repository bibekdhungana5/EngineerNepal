<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Engineers Listing — Engineers Nepal</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <div class="brand">
        <div class="logo-box">🏢</div>
        <span class="brand-name">Engineers Nepal</span>
      </div>

      <nav class="main-nav" aria-label="Main navigation">
        <a href="">Home</a>
        <a href="#">Engineers</a>
        <a href="#">Services</a>
        <a href="#" class="active">About</a>
        <a href="#">Contact</a>
      </nav>

      <div class="header-actions">
        <button class="icon-btn" aria-label="search">🔍</button>
        <a class="login" href="#">Login / Signup</a>
      </div>
    </div>
  </header>

  <main class="container page-grid">
    <aside class="filters" aria-label="Filters">
      <h3>Filters</h3>

      <div class="filter-block">
        <label class="filter-title">City / District</label>
        <input type="text" placeholder="E.g., Kathmandu" />
      </div>

      <details class="filter-block" open>
        <summary class="filter-title">Service Type</summary>
        <div class="checkbox-list">
          <label><input type="checkbox"> Civil Engineering</label>
          <label><input type="checkbox"> Architectural Design</label>
          <label><input type="checkbox"> Structural Engineering</label>
          <label><input type="checkbox"> Electrical Engineering</label>
          <label><input type="checkbox"> Surveying</label>
          <label><input type="checkbox"> Urban Planning</label>
        </div>
      </details>

      <details class="filter-block">
        <summary class="filter-title">Experience</summary>
        <div class="radio-list">
          <label><input type="radio" name="exp" checked> Any</label>
          <label><input type="radio" name="exp"> 0-2 Years</label>
          <label><input type="radio" name="exp"> 2-5 Years</label>
          <label><input type="radio" name="exp"> 5-10 Years</label>
          <label><input type="radio" name="exp"> 10+ Years</label>
        </div>
      </details>

      <details class="filter-block">
        <summary class="filter-title">Price Range</summary>
        <div class="price-range">
          <div class="price-values">
            <span>NPR 0</span><span>NPR 5,000/hr</span>
          </div>
          <input type="range" min="0" max="5000" value="3000" id="priceRange">
        </div>
      </details>

      <details class="filter-block">
        <summary class="filter-title">Ratings</summary>
        <div class="radio-list">
          <label><input type="radio" name="rating" checked> Any</label>
          <label><input type="radio" name="rating"> 4.5 & Up</label>
          <label><input type="radio" name="rating"> 4.0 & Up</label>
          <label><input type="radio" name="rating"> 3.5 & Up</label>
        </div>
      </details>

      <button id="resetFilters" class="reset-btn">Reset Filters</button>
    </aside>

    <section class="results">
      <div class="results-header">
        <h2>Showing <span id="count">9</span> Engineers</h2>
      </div>

      <div class="cards" id="cards">
        <!-- Cards are injected by JS. Fallback static card for no-js users: -->
        <noscript>
          <p style="color:#666">Enable JavaScript to see the full interactive listing.</p>
        </noscript>
      </div>

      <div class="pagination">
        <button class="page-btn">«</button>
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn">»</button>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-left">
        <div class="footer-brand">
          <div class="logo-box small">🏢</div>
          <span class="footer-title">Engineers Nepal</span>
        </div>
        <p class="footer-desc">Connecting you with the best licensed engineers for home design, construction, and technical services in Nepal.</p>

        <div class="contact">
          <div>📍 123 Engineering Rd, Kathmandu, Nepal</div>
          <div>📞 +977 1-2345678</div>
          <div>✉️ info@engineersnepal.com</div>
        </div>
      </div>

      <div class="footer-links">
        <div>
          <h4>Company</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>

        <div>
          <h4>Engineers</h4>
          <ul>
            <li><a href="#">Find Engineers</a></li>
            <li><a href="#">Register as Engineer</a></li>
          </ul>
        </div>

        <div>
          <h4>Legal</h4>
          <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom container">
      <small>© <span id="year"></span> Engineers Nepal. All rights reserved.</small>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
