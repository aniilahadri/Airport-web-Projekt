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
      <div class="services-items">
        <img src="../images/medical-photo.webp" alt="medical-help">
        <h2>24/7 medical support.</h2>
      </div>
      <div class="services-items">
        <img src="../images/travelex.webp" alt="exchange">
        <h2>Currency exchange at Airport.</h2>
      </div>
      <div class="services-items">
        <img src="../images/brett-jordan-OCfHTaB5THQ-unsplash.jpg" alt="wifi-free">
        <h2>Free Wifi all the time.</h2>
      </div>
    </div>
    <div class="second-services">
      <div class="services-items">
        <img src="../images/360_F_638096658_5LJtrNHSNSITGJDTgKkY2YiuhKKPCpaO.jpg" alt="baggages">
        <h2>Your Baggage,Our Priority.</h2>
      </div>
      <div class="services-items">
        <img src="../images/lost_and_found.webp" alt="baggages-find">
        <h2>Recover what you've lost.</h2>
      </div>
      <div class="services-items">
        <img src="../images/power_charge.jpg" alt="recharger">
        <h2>Recharge Station.</h2>
      </div>
    </div>
  </section>
  <section class="section-ads">
    <h1>Travel with a 
      <span style="color: rgb(29, 126, 230);">sense of calm</span>
    </h1>
    <p>Have a pleasant flight and explore the most recent deals and offers from our partners.</p>
    <div class="ads-container">
      <div class="first-ad-content">
        <img src="../images/ad_1.jpg" alt="first-ad">
        <div class="content-of-ad">
          <h3>Kosovo rent center <strong>KAYAK</strong></h3>
          <p>Find unbeatable car rental prices!<br> Enjoy your journey with our services.</p>
          <a href="https://www.kayak.com/Kosovo-Car-Rentals.276.crc.html" target="_blank">Learn more</a>
        </div>
      </div>
      <div class="second-ad-content">
        <img src="../images/delta_Ad.jpg" alt="second-ad">
        <div class="content-of-ad">
          <h3>Delta Airline</h3>
          <p>Expereince Comfort and Quality! <br>Travel confidently with Delta Airlines</p>
          <a href="https://www.kayak.com/Kosovo-Car-Rentals.276.crc.html" target="_blank">Learn more</a>
        </div>
      </div>
    </div>
    <div class="links-for-user">
        <a href="../controllers/aboutus.php" class="box-content" target="_blank">
          <div class="airport-about">
            <img src="../images/5355685_airplane_christmas_holiday_plane_snow_icon.png" alt="aboutUs-icon">
            <h3>Who We Are</h3>
          </div>
        </a>
        <a href="#" class="box-content">
          <div class="social-media" target="_blank">
            <img src="../images/1814104_favorite_heart_like_love_icon.png" alt="heart">
            <h3>Social Media</h3>
          </div>
        </a>
        <a href="../controllers/contact.php" class="box-content" target="_blank">
          <div class="airport-contact">
            <img src="../images/370077_note_text_write_edit_pencil_icon.png" alt="notes">
            <h3>Complaints or Suggestions</h3>
          </div>
        </a>
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
