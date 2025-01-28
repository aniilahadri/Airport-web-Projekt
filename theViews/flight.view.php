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
    <main style="flex: 1;">
      <section class="primary-image-container">
        <div class="main-img">
          <img src="../images/airplane-sunset.jpg" alt="inside airport">
        </div>
      </section>

      <section class="flight-arrivals-departures">
        <div class="overlay"></div>
        <div class="container-flights">
          <div class="nav-container">
            <div class="line"></div>
          </div>
          <?php if(isset($arrival)) : ?>
            <h1>Flight number 
              <span style="color: rgb(48, 67, 82);"><?=$arrival['Flight_Id']?></span>
            </h1>
          <div class="body-container">
            <div class="left-details">
              <h2>Flight</h2>
              <div class="status">
                <p>Current Status</p>
                <h4><?=$arrival['Status']?></h4>
              </div>
              <div class="airline">
                <p>Airline Provider</p>
                <h4><?=$arrival['Airline']?></h4>
              </div>
            </div>
            <div class="right-details">
              <div class="start">
                <h2>Takeoff Area</h2>
                <h4><?=$arrival['Origin']?></h4>
                <h2>Takeoff Time</h2>
                <h4><?=$arrival['Takeoff_Time']?></h4>
              </div>
              <div class="end">
                <h2>Landing Area</h2>
                <h4><?=$arrival['Destination']?></h4>
                <h2>Landing Time</h2>
                <h4><?php echo "{$arrival['Date']} {$arrival['Time']}"?></h4>
              </div>
            </div>
          </div>
          <?php else :?>
            <h1>Flight number 
              <span style="color: rgb(48, 67, 82);"><?=$departure['Flight_Id']?></span>
            </h1>
          <div class="body-container">
          <div class="left-details">
              <h2>Flight</h2>
              <div class="status">
                <p>Current Status</p>
                <h4><?=$departure['Status']?></h4>
              </div>
              <div class="airline">
                <p>Airline Provider</p>
                <h4><?=$departure['Airline']?></h4>
              </div>
            </div>
            <div class="right-details">
              <div class="start">
                <h2>Takeoff Area</h2>
                <h4><?=$departure['Origin']?></h4>
                <h2>Takeoff Time</h2>
                <h4><?php echo "{$departure['Date']} {$departure['Time']}"?></h4>
              </div>
              <div class="end">
                <h2>Landing Area</h2>
                <h4><?=$departure['Destination']?></h4>
                <h2>Landing Time</h2>
                <h4><?=$departure['Landing_Time']?></h4>
              </div>
            </div>
          </div>
          <?php endif;?>
          <a href="../controllers/flights.php">
            <button class="all-flights">
              All Flights
            </button>
          </a>
        </div>
      </section>
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