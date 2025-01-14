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
            <button>Arrivals</button>
            <button>Departures</button>
          </div>
          <div class="table-container-flights">
            <table >
              <tr>
                <th>Date</th>
                <th>Time</th>
                <th colspan="2">Destination</th>
                <th colspan="2">Airline</th>
                <th>Flight id</th>
                <th>Status</th>
                <th>Details</th>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
              </tr>
              <tr>
                <td>30/12/2024</td>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
                <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
                <tr>
                  <td>30/12/2024</td>
                  <td>02:05</td>
                  <td colspan="2">London</td>
                  <td colspan="2">Turkish Airline</td>
                  <td>W8 1001</td>
                  <td>In Time</td>
                  <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
                </tr>
                <tr>
                  <td>30/12/2024</td>
                  <td>02:05</td>
                  <td colspan="2">London</td>
                  <td colspan="2">Turkish Airline</td>
                  <td>W8 1001</td>
                  <td>In Time</td>
                  <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
                </tr>
                <tr>
                  <td>30/12/2024</td>
                  <td>02:05</td>
                  <td colspan="2">London</td>
                  <td colspan="2">Turkish Airline</td>
                  <td>W8 1001</td>
                  <td>Delayed</td>
                  <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
                </tr>
                <tr>
                  <td>30/12/2024</td>
                  <td>02:05</td>
                  <td colspan="2">London</td>
                  <td colspan="2">Turkish Airline</td>
                  <td>W8 1001</td>
                  <td>Delayed</td>
                  <td><button class="button-of-array"><img src="../images/right-arrow.png" alt="right-array"></button></td>
                </tr>
              </tr>
            </table>
          </div>
      </main>

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