<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Engineers Nepal — Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="page">
    <section class="left-card" aria-label="Authentication panel">
      <div class="card-inner">
        <header class="brand">
          <div class="brand-icon" aria-hidden="true">🏢</div>
          <h1 class="brand-title">Engineers Nepal</h1>
        </header>
        
        <h2 class="welcome">Welcome to Engineers Nepal</h2>
        <p class="lead">Login to your account or register a new one.</p>

        <nav class="tabs" role="tablist" aria-label="Account type">
          <button id="tab-user" class="tab active" role="tab" aria-selected="true">User</button>
          <button id="tab-engineer" class="tab" role="tab" aria-selected="false">Engineer</button>
          <button id="tab-admin" class="tab" role="tab" aria-selected="false">Admin</button>
        </nav>

        <form id="login-form" class="form" autocomplete="on" novalidate>
          <label class="input-wrap">
            <span class="sr">Email or Username</span>
            <input id="email" type="text" placeholder="Email or Username" required>
          </label>

          <label class="input-wrap">
            <span class="sr">Password</span>
            <input id="password" type="password" placeholder="Password" required>
          </label>

          <button type="submit" class="btn primary" id="login-btn">Login as User</button>
        </form>

        <div class="links">
          <a href="#" id="forgot">Forgot Password?</a>
          <a href="#" id="reset">Reset Password</a>
        </div>

        <hr class="divider">

        <div class="register-block">
          <a class="register-link" href="#" id="register-user">Register as User</a>

          <p class="engineer-caption">Engineer Registration (with License Upload)</p>

          <button class="btn secondary" id="register-engineer">Register as Engineer</button>
        </div>

    </section>

    <aside class="right-image" aria-hidden="true"></aside>
  </main>

  <script src="script.js"></script>
</body>
</html>
