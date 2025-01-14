<?php
require BASE_PATH . "partials/head.php";?>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
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
  <div class="wrapper">
    <h1>Login</h1>
    <p id="error-message"></p>
    <form id="form">
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
        <button type="submit">Login</button>
    </form>
    <p>New here? <a href="../controllers/signin.php">Create an account</a></p>
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