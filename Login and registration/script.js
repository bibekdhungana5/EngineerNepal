// Tab switching and form behavior (pure JS, no libraries)
(function(){
  const tabs = {
    user: document.getElementById('tab-user'),
    engineer: document.getElementById('tab-engineer'),
    admin: document.getElementById('tab-admin')
  };

  // toggle active tab visually
  function setActive(target){
    Object.values(tabs).forEach(t => {
      t.classList.toggle('active', t === target);
      t.setAttribute('aria-selected', (t === target).toString());
    });

    // change main button text based on tab
    const loginBtn = document.getElementById('login-btn');
    if (target === tabs.user) loginBtn.textContent = 'Login as User';
    else if (target === tabs.engineer) loginBtn.textContent = 'Login as Engineer';
    else loginBtn.textContent = 'Login as Admin';
  }

  tabs.user.addEventListener('click', ()=> setActive(tabs.user));
  tabs.engineer.addEventListener('click', ()=> setActive(tabs.engineer));
  tabs.admin.addEventListener('click', ()=> setActive(tabs.admin));

  // simple form validation demo
  const form = document.getElementById('login-form');
  form.addEventListener('submit', function(e){
    e.preventDefault();
    const email = document.getElementById('email').value.trim();
    const pass = document.getElementById('password').value;
    if(!email){ alert('Please enter email or username'); return; }
    if(!pass){ alert('Please enter password'); return; }
    alert('Logged in (demo). Tab: ' + document.querySelector('.tab.active').textContent);
  });

  // other links (demo)
  document.getElementById('forgot').addEventListener('click', function(e){
    e.preventDefault(); alert('Password recovery flow (demo).');
  });
  document.getElementById('reset').addEventListener('click', function(e){
    e.preventDefault(); alert('Reset password (demo).');
  });
  document.getElementById('register-user').addEventListener('click', function(e){
    e.preventDefault(); alert('Register as user (demo).');
  });
  document.getElementById('register-engineer').addEventListener('click', function(e){
    e.preventDefault(); alert('Register as engineer (demo).');
  });

})();
