<?php
require BASE_PATH . "partials/head.php";?>
  <script type="text/javascript" src="../validation.js" defer></script>
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
          <input type="text" name="email" id="email-input" placeholder="Email" 
          value="<?=((isset($_POST['email']) && $errors !== []) ? htmlspecialchars($_POST['email']) : false)?>">
        </div>
        <div>
          <label for="password-input">
            <img src="../images/3669338_lock_ic_icon.png" height="24px" alt="lock">
          </label>
          <input type="password" name="password" id="password-input" placeholder="Password">
        </div>
        <?php if(isset($errors['general'])):?>
          <p style="color:red;margin:0;opacity:0.8"> 
            <?= $errors['general']?>
          </p>
        <?php elseif(isset($errors['password'])):?>
          <p style="color:red;margin:0;opacity:0.8"> 
            <?= $errors['password']?>
          </p>
        <?php elseif(isset($errors['email'])):?>
          <p style="color:red;margin:0;opacity:0.8"> 
            <?= $errors['email']?>
          </p>
        <?php elseif(isset($errors['NoUser'])):?>
          <p style="color:red;margin:0;opacity:0.8"> 
            <?= $errors['NoUser']?>
          </p>
        <?php elseif(isset($errors['password-matching'])):?>
          <p style="color:red;margin:0;opacity:0.8"> 
            <?= $errors['password-matching']?>
          </p>
        <?php endif; ?>
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