<?php
require BASE_PATH . "partials/head.php";?>
  
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
<div style="display: flex;flex-direction: column; min-height:100vh; ">
  <?php require BASE_PATH . "partials/header.php"?>
    <main style="flex:1">
        <div class="container">
            <div class="square">
                <h1>Users</h1>
                <h3>Total:</h3>
                <?php if(isset($User)) :?>
                    <p><?= $User["Users"]?></p>
                <?php endif ?>
            </div>
            <div class="square">
                <h1>Arrivals</h1>
                <h3>Total:</h3>
                <?php if(isset($Arrivals)) :?>
                    <p><?= $Arrivals["Arrivals"]?></p>
                <?php endif ?>
            </div>
            <div class="square">
                <h1>Departures</h1>
                <h3>Total:</h3>
                <?php if(isset($Departures)) :?>
                   <p><?= $Departures["Departures"]?></p>
                <?php endif ?>
            </div>
            <div class="square">
                <h1>Suggestions</h1>
                <h3>Total:</h3>
                
                <?php if(isset($Suggestions)) :?>
                    <p><?= $Suggestions["Suggestions"]?></p>
                <?php endif ?>
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