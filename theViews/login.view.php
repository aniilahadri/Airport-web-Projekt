<?php
require BASE_PATH . "partials/head.php";?>
  <script type="text/javascript" src="validation.js" defer></script>
  <style>
    .unhidden{
      display: block;
    }
    .hidden{
      display: none;
    }
  </style>
</head>
<body>
<div style="display: flex;flex-direction: column; max-height:100vh; ">
  <?php require BASE_PATH . "partials/header.php"?>
  <main style="flex:1">
    <div class="wrapper">
      <h1>Login</h1>
      <p id="error-message"></p>
      <form id="form" action="../controllers/login.php" method="post">
        <div>
          <label for="email-input">
            <img src="../images/134146_mail_email_icon.png" height="24px" alt="email">
          </label>
          <input type="email" name="email" id="email-input" placeholder="Email">
          <?php if(isset($errors['email'])):?>
                        <p class="text-red-500 text-xs mt-3 font-semibold"> <?= $errors['email']?> </p>
                    <?php endif; ?>
        </div>
        <div>
          <label for="password-input">
            <img src="../images/3669338_lock_ic_icon.png" height="24px" alt="lock">
          </label>
          <input type="password" name="password" id="password-input" placeholder="Password">
          <?php if(isset($errors['password'])):?>
                        <p class="text-red-500 text-xs mt-3 font-semibold"> <?= $errors['password']?> </p>
                    <?php endif; ?>
        </div>
          <button type="submit">Login</button>
      </form>
      <div class="link">
        <p>New here? <a href="../controllers/signin.php">Create an account</a></p>
      </div>  
    </div>
  </main>

  <?php require BASE_PATH . 'partials/footer.php'?>  
  <script>
  const searchBar = document.querySelector('.searchBar');
  const searchIcon = document.querySelector('#search-div');
  const hamburger = document.querySelector('.hamburger');

  hamburger.onclick = function() {
    let navBar = document.querySelector('.nav-bar-mobile');
    navBar.classList.toggle("active");
  }

  searchBar.addEventListener('click',hiddenSearch);

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
</script>  
</body>
</html>