<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Engineer Dashboard — Engineers Nepal</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <div class="brand">
        <div class="logo-box">🏢</div>
        <span class="brand-name">Engineers Nepal</span>
      </div>

      <div class="header-right">
        <div class="search-placeholder"> </div>
        <div class="avatar-wrap">
          <img class="top-avatar" src="" data-default="" alt="user avatar">
        </div>
      </div>
    </div>
  </header>

  <main class="dashboard container">
    <aside class="sidebar">
      <nav>
        <ul>
          <li class="active">Profile</li>
          <li>License & Verification</li>
          <li>Service Management</li>
          <li>Portfolio</li>
          <li>Booking Management</li>
          <li>Earnings</li>
          <li>Client Reviews</li>
          <li>Messages</li>
          <li class="spaced">Settings</li>
        </ul>
      </nav>
    </aside>

    <section class="main">
      <h1 class="page-title">Engineer Dashboard</h1>

      <!-- PERSONAL PROFILE -->
      <section class="card profile-card">
        <h3>Personal Profile</h3>
        <p class="muted">Update your personal details and contact information.</p>

        <div class="form-grid">
          <label>Full Name
            <input type="text" value="Jane Engineer">
          </label>
          <label>Email
            <input type="email" value="jane.e@example.com">
          </label>

          <label>Phone Number
            <input type="text" value="+977 987-6543210">
          </label>
          <label>Location
            <input type="text" value="Kathmandu, Nepal">
          </label>

          <label class="full">Skills
            <textarea> Civil Engineering, Structural Analysis, CAD, Project Management, Sustainable Design</textarea>
          </label>

          <label class="full">Experience
            <textarea> 5+ years experience in infrastructure development and bridge design. Led projects from concept to completion.</textarea>
          </label>
        </div>

        <div class="profile-actions">
          <button id="saveProfile" class="btn-primary small">Save Changes</button>
          <button id="cancelProfile" class="btn-outline small">Cancel</button>
        </div>
      </section>

      <!-- LICENSE -->
      <section class="card">
        <h3>License & Verification</h3>
        <p class="muted">Upload your engineering license for verification. Accepted formats: PDF, JPG, PNG.</p>

        <div class="license-row">
          <div>Verification Status: <span class="status pending">Pending</span></div>
          <div>
            <input id="licenseFile" type="file" accept=".pdf,image/*" />
            <button id="uploadLicense" class="btn-primary small">Upload</button>
          </div>
        </div>
      </section>

      <!-- SERVICE MANAGEMENT + PORTFOLIO -->
      <div class="two-col-cards">
        <section class="card small-card">
          <h4>Service Management</h4>

          <label>Service Areas
            <input type="text" value="Kathmandu Valley, Pokhara, Chitwan">
          </label>

          <div class="price-row">
            <div>
              <label>Hourly Rate (NPR)
                <input type="number" value="1500">
              </label>
            </div>
            <div>
              <label>Project Based Rate (NPR)
                <input type="text" value="Negotiable">
              </label>
            </div>
          </div>

          <div class="sm-actions">
            <button class="btn-outline tiny">Update Hourly Rate</button>
            <button class="btn-outline tiny">Update Project Rate</button>
          </div>

          <button id="addPackage" class="btn-primary small fullwidth">Add New Package</button>
        </section>

        <aside class="card small-card portfolio-card">
          <h4>Portfolio</h4>
          <div class="portfolio-grid">
            <!-- placeholders -->
            <div class="thumb" data-default=""><img src="" alt="proj 1" data-default=""></div>
            <div class="thumb" data-default=""><img src="" alt="proj 2" data-default=""></div>
            <div class="thumb" data-default=""><img src="" alt="proj 3" data-default=""></div>
            <div class="thumb" data-default=""><img src="" alt="proj 4" data-default=""></div>
          </div>

          <button class="btn-primary small fullwidth">Upload New Project</button>
        </aside>
      </div>

      <!-- Booking Management -->
      <section class="card">
        <h3>Booking Management</h3>
        <p class="muted">Accept, reject, or mark your client bookings as complete.</p>

        <ul class="bookings-list">
          <li>
            <div>
              <div class="booking-title">Prakash Sharma</div>
              <div class="booking-sub">Structural Design Review on 2024-07-15</div>
            </div>
            <div class="booking-actions">
              <button class="btn-primary tiny accept">Accept</button>
              <button class="btn-danger tiny reject">Reject</button>
            </div>
          </li>

          <li>
            <div>
              <div class="booking-title">Anisha Thapa</div>
              <div class="booking-sub">CAD Drafting for Home on 2024-07-10</div>
            </div>
            <div class="booking-actions">
              <button class="btn-outline tiny">Mark Complete</button>
            </div>
          </li>

          <li>
            <div>
              <div class="booking-title">Rahul KC</div>
              <div class="booking-sub">Site Inspection - Foundation on 2024-07-01</div>
            </div>
            <div class="booking-actions">
              <span class="badge done">Completed</span>
            </div>
          </li>

          <li>
            <div>
              <div class="booking-title">Sophia Limbu</div>
              <div class="booking-sub">MEP Design Consultation on 2024-06-28</div>
            </div>
            <div class="booking-actions">
              <span class="badge done">Completed</span>
            </div>
          </li>
        </ul>
      </section>

      <!-- Earnings + Reviews -->
      <div class="two-col-cards">
        <section class="card small-card earnings-card">
          <h4>Earnings Overview</h4>
          <div class="earnings-row">
            <div class="earn-big">NPR <strong>350,000</strong></div>
            <div class="earn-muted">Pending <br> NPR 15,000</div>
          </div>

          <div class="payment-history">
            <h5>Payment History</h5>
            <table>
              <thead><tr><th>Date</th><th>Client</th><th>Amount</th><th>Status</th></tr></thead>
              <tbody>
                <tr><td>2024-07-10</td><td>Anisha Thapa</td><td>NPR 15,000</td><td class="paid">Paid</td></tr>
                <tr><td>2024-07-01</td><td>Rahul KC</td><td>NPR 25,000</td><td class="paid">Paid</td></tr>
                <tr><td>2024-06-25</td><td>Binod Rai</td><td>NPR 8,000</td><td class="paid">Paid</td></tr>
              </tbody>
            </table>
          </div>
        </section>

        <section class="card small-card reviews-card">
          <h4>Client Reviews</h4>
          <div class="review">
            <div class="r-author">Bishal Gurung <span class="stars">★★★★★</span></div>
            <div class="r-body">Excellent structural design work for our new house. Very professional and delivered on time!</div>
            <div class="r-reply">
              <textarea placeholder="Write your response here..."></textarea>
              <button class="btn-outline tiny">Reply</button>
            </div>
          </div>

          <div class="review">
            <div class="r-author">Sita Devi <span class="stars">★★★★☆</span></div>
            <div class="r-body">Provided great insights for the renovation project. Communication could be faster.</div>
            <div class="r-reply">
              <textarea placeholder="Write your response here..."></textarea>
              <button class="btn-outline tiny">Reply</button>
            </div>
          </div>
        </section>
      </div>

      <!-- Messages -->
      <section class="card">
        <h3>Messages</h3>
        <p class="muted">Communicate directly with your clients.</p>

        <div class="messages">
          <div class="msg left">
            <div class="msg-author">Prakash Sharma</div>
            <div class="msg-text">Hi Jane, I have a few questions regarding the structural report for my project. Are you available for a quick call tomorrow?</div>
            <div class="msg-time">2 hours ago</div>
          </div>

          <div class="msg right">
            <div class="msg-text">Yes Prakash, I can call you tomorrow morning. What time works best for you?</div>
            <div class="msg-time">1 hour ago</div>
          </div>

          <div class="msg left">
            <div class="msg-author">Anisha Thapa</div>
            <div class="msg-text">Could you please send the updated CAD files for the home design? Thanks!</div>
            <div class="msg-time">Yesterday</div>
          </div>
        </div>

        <div class="message-compose">
          <input id="msgText" placeholder="Type your message here..." />
          <button id="sendMsg" class="btn-primary small">Send</button>
        </div>
      </section>

      <!-- spacer then footer -->
      <div style="height:24px"></div>
    </section>
  </main>

  <!-- minimal centered footer as requested -->
  <footer class="dash-footer">
    <div class="container">
      <small>© <span id="year">2025</span> Engineers Nepal. All rights reserved.</small>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
