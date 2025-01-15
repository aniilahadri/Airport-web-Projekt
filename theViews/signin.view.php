<?php
require BASE_PATH . "partials/head.php";?>
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
<link rel="icon" href="images/9055475_bxs_plane_alt_icon.png">
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
  <div class="wrapper">
    <h1>Sign up</h1>
    <p id="error-message"></p>
    <form id="form">
      <div>
        <label for="firstname-input">
          <img src="../images/1564534_customer_man_user_account_profile_icon.png" alt="user" height="24px">
        </label>
        <input type="text" name="firstname" id="firstname-input" placeholder="Firstname">
      </div>
      <div>
        <label for="email-input">
          <img src="../images/134146_mail_email_icon.png" height="24px" alt="email">
        </label>
        <input type="email" name="email" id="email-input" placeholder="Email">
      </div>
      <div>
        <label for="password-input">
          <img src="../images/3669338_lock_ic_icon.png" height="24px" alt="lock">
        </label>
        <input type="password" name="password" id="password-input" placeholder="Password">
      </div>
      <div>
        <label for="repeat-password-input">
          <img src="../images/3669338_lock_ic_icon.png" height="24px" alt="lock">
        </label>
        <input type="password" name="repeat-password" id="repeat-password-input" placeholder="Repeat Password">
      </div>
      <button type="submit">Signup</button>
    </form>
    <p>Already have an account? <a href="../controllers/login.php">Login</a></p>
  </div>

  <?php require BASE_PATH . 'partials/footer.php'?>  
  <script>
  const searchBar = document.querySelector('.searchBar');
  const searchIcon = document.querySelector('#search-div');

  searchBar.addEventListener('click',hiddenSearch);

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
</script>  
</body>
</html>