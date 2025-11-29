<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Book — Engineers Nepal</title>
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
        <a href="#">Home</a>
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
    <!-- Left: booking form -->
    <section class="booking">
      <div class="card-inner form-card">
        <h3 class="section-title">Book Your Service</h3>
        <p class="muted">Fill in the details below to schedule your consultation.</p>

        <label class="label">Service Type</label>
        <select class="input">
          <option>Select a service type</option>
          <option>Home Inspection</option>
          <option>Structural Design</option>
        </select>

        <label class="label">Location</label>
        <input class="input" type="text" placeholder="e.g., Kathmandu, Lalitpur">

        <div class="row two">
          <div>
            <label class="label">Date</label>
            <input class="input" type="date">
          </div>
          <div>
            <label class="label">Time</label>
            <input class="input" type="time">
          </div>
        </div>

        <label class="label">Additional Notes</label>
        <textarea class="input textarea" rows="5" placeholder="Please describe your project or specific requirements."></textarea>

        <button id="confirmBooking" class="btn-primary">Confirm Booking</button>
      </div>
    </section>

    <!-- Right: engineer card -->
    <aside class="summary">
      <div class="engineer-card">
        <div class="engineer-top">
          <!-- If you have a real image, set src or data-default to the file path -->
          <img class="engineer-photo" src="" data-default="" alt="Engineer profile">
          <div class="engineer-info">
            <div class="engineer-name">Er. Sumit Sharma</div>
            <div class="engineer-role">Civil Engineer</div>
          </div>
        </div>

        <hr class="thin" />

        <div class="price-summ
