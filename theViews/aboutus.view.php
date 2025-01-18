<?php
require BASE_PATH . "partials/head.php";
?>
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
  <section class="primary-image-container">
    <div class="main-img">
      <img src="../images/nicolas-jehly-6WImwokn8dA-unsplash.jpg" alt="airport">
    </div>
  </section>
  <section class="text-primary-image">
    <h1>About <strong>Airport</strong></h1>
  </section>
  <section class="the-article">
    <h1>At a Glance</h1>
    <div class="first-content">
        <div class="content-items">
          <img src="../images/icon_1.png" alt="airport-icon">
          <h2>28 April 2000</h2>
          <p>first opened</p>
        </div>
        <div class="content-items">
          <img src="../images/icon_2.png" alt="airport-people">
          <h2>500 thousand</h2>
          <p>passengers</p>
        </div>
        <div class="content-items">
          <img src="../images/icon_3.png" alt="airplane">
          <h2>Connecting to around 120</h2>
          <p>destinations worldwide by around 50 airlines</p>
        </div>
    </div>
    <div class="second-content">
      <div class="content-items">
        <img src="../images/icon_4png.png" alt="staff">
        <h2>Around 7,000 staff</h2>
        <p>work at Airport</p>
      </div>
      <div class="content-items">
        <img src="../images/icon_5.png" alt="mail">
        <h2>10,000</h2>
        <p>tonnes of cargo and airmail moved</p>
      </div>
      <div class="content-items">
        <img src="../images/icon_6.png" alt="reward">
        <h2>Over 20</h2>
        <p>World's Best Airport awards</p>
      </div>
    </div>
    <h1>Services We Offer</h1>
    <div class="first-services">
      <div>
        <img src="../images/cdc-ioZc-2TpcjY-unsplash.jpg" alt="medical-help">
        <h2>24/7 medical support</h2>
      </div>
    </div>
  </section>
  </main>
  
  <?php require BASE_PATH . 'partials/footer.php'?>

<script>
const searchBar = document.querySelector('.searchBar');
const searchIcon = document.querySelector('#search-div');
searchBar.addEventListener('click',hiddenSearch);
const hamburger = document.querySelector('.hamburger');

hamburger.onclick = function() {
  let navBar = document.querySelector('.nav-bar-mobile');
  navBar.classList.toggle("active");
}
function hiddenSearch () {
  searchIcon.classList.toggle('unhidden');
}

</script>
</body>
</html>
