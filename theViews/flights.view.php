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
          <div class="top-container-flights" > 
            <button id="arrivalButton">Arrivals</button>
            <button id="departureButton">Departures</button>
          </div>
          <div class="table-container-flights">
          <table id="arrivalTable">
              <tr>
                <th>Date</th>
                <th>Time</th>
                <th colspan="2">Destination</th>
                <th colspan="2">Airline</th>
                <th>Flight id</th>
                <th>Status</th>
                <th>Details</th>
              </tr>
              <?php foreach($arrivals as $arrival) :?>
              <tr>
                <td><?=$arrival['Date']?></td>
                <td><?=$arrival['Time']?></td>
                <td colspan="2"><?=$arrival['Destination']?></td>
                <td colspan="2"><?=$arrival['Airline']?></td>
                <td><?=$arrival['Flight_Id']?></td>
                <td><?=$arrival['Status']?></td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <?php endforeach; ?>
            </table>
            <table id="departureTable" class="departureTable">
              <tr>
                <th>Date</th>
                <th>Time</th>
                <th colspan="2">Destination</th>
                <th colspan="2">Airline</th>
                <th>Flight id</th>
                <th>Status</th>
                <th>Details</th>
              </tr>
              <?php foreach($departures as $departure) :?>
              <tr>
                <td><?=$departure['Date']?></td>
                <td><?=$departure['Time']?></td>
                <td colspan="2"><?=$departure['Destination']?></td>
                <td colspan="2"><?=$departure['Airline']?></td>
                <td><?=$departure['Flight_Id']?></td>
                <td><?=$departure['Status']?></td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
      </main>

  <?php require BASE_PATH . 'partials/footer.php'?>  
  <script>
  const searchBar = document.querySelector('.searchBar');
  const searchIcon = document.querySelector('#search-div');
  const departureTable =document.querySelector('#departureTable');
  const departureButton =document.querySelector('#departureButton');
  const arrivalTable =document.querySelector('#arrivalTable');
  const arrivalButton =document.querySelector('#arrivalButton');
  const hamburger = document.querySelector('.hamburger');

  hamburger.onclick = function() {
    let navBar = document.querySelector('.nav-bar-mobile');
    navBar.classList.toggle("active");
  }


  searchBar.addEventListener('click',hiddenSearch);

  departureButton.addEventListener('click',() => {
    arrivalTable.classList.add('hidden'); 
    departureTable.classList.add('unhidden');
  });

  arrivalButton.addEventListener('click',() => {
    departureTable.classList.remove('unhidden'); 
    arrivalTable.classList.remove('hidden');
  });

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
</script>  
</body>
</html>