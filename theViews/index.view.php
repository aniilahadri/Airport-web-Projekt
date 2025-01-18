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
  <main style="flex:1;">
    <section class="primary-image-container">
      <div class="main-img">
        <img src="../images/GettyImages-172672886.jpg" alt="inside airport">
      </div>
    </section>
    <section class="flight-arrivals-departures">
      <div class="overlay"></div>
        <div class="container-flights">
          <div class="top-container-flights" > 
            <button id="arrivalButton">Arrivals</button>
            <button id="departureButton">Departures</button>
          </div>
          <div class="body-container">
            <div class="table-container-flights">
              <table id="arrivalTable">
                <tr>
                  <th>Time</th>
                  <th colspan="2">Destination</th>
                  <th colspan="2">Airline</th>
                  <th>Flight id</th>
                  <th>Status</th>
                </tr>
                <?php for($x=0;$x<5;$x++) :?>
                <tr>
                  <td><?=$arrivals[$x]['Time']?></td>
                  <td colspan="2"><?=$arrivals[$x]['Destination']?></td>
                  <td colspan="2"><?=$arrivals[$x]['Airline']?></td>
                  <td><?=$arrivals[$x]['Flight_Id']?></td>
                  <td><?=$arrivals[$x]['Status']?></td>
                </tr>
                <?php endfor;?>
              </table>
              <table id="departureTable" class="departureTable">
                <tr>
                  <th>Time</th>
                  <th colspan="2">Destination</th>
                  <th colspan="2">Airline</th>
                  <th>Flight id</th>
                  <th>Status</th>
                </tr>
                <?php for($x=0;$x<5;$x++) :?>
                <tr>
                  <td><?=$departures[$x]['Time']?></td>
                  <td colspan="2"><?=$departures[$x]['Destination']?></td>
                  <td colspan="2"><?=$departures[$x]['Airline']?></td>
                  <td><?=$departures[$x]['Flight_Id']?></td>
                  <td><?=$departures[$x]['Status']?></td>
                </tr>
                <?php endfor;?>
              </table>
            </div>
              <div class="bottom-container-flights">
                <div class="search-bottom-container">
                  <input type="text" name="submit-search" id="search" placeholder="Search Arrivals...">
                  <button type="submit" name="sumbit-search" class="search-button-submit"><img src="../images/211817_search_strong_icon.png" alt="search icon"></button>
                </div>
                <?php if ($_SESSIONS['user'] ?? false) : ?>
                <button class="all-flights"><a href="../controllers/flights.php">All Flights</a></button>
                <?php else :?>
                  <a href="../controllers/flights.php"><button class="all-flights">All Flights</button></a>
                <?php endif; ?>
              </div>
          </div>
    </section>
    <section>
      <div class="advertisement">
        <div class="first-advertisement">
          <div class="first-advertisement-img">
            <img src="../images/car-hire-centre-567x350px.webp" alt="">
          </div>
          <div class="first-advertisement-content">
            <h3>Need to rent a car?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nesciunt placeat iure, molestiae architec
              to sunt modi tempore vel praesentium vitae ipsam in, maiores recusandae quasi eius neque esse iste! Facere.
              Magni, corporis excepturi! Adipisci hic eum quo laudantium eveniet autem tempora, molestiae nam qui ip
              sum odio saepe nihil reprehenderit non maxime sequi exercitationem iure porro ab sed laborum eius quas?</p>
          </div>
        </div>
        <div class="second-advertisement">
          <div class="second-advertisement-img">
            <img src="../images/collecting-your-car.webp" alt="">
          </div>
          <div class="second-advertisement-content">
            <h3>Need to park your car?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nesciunt placeat iure, molestiae architec
              to sunt modi tempore vel praesentium vitae ipsam in, maiores recusandae quasi eius neque esse iste! Facere.
              Magni, corporis excepturi! Adipisci hic eum quo laudantium eveniet autem tempora, molestiae nam qui ip
              sum odio saepe nihil reprehenderit non maxime sequi exercitationem iure porro ab sed laborum eius quas?</p>
          </div>
        </div>
        <div class="third-advertisement">
          <div class="third-advertisement-img">
            <img src="../images/Food and Beverage.jpg" alt="">
          </div>
          <div class="third-advertisement-content">
            <h3>Our Restaurant...</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nesciunt placeat iure, molestiae architec
              to sunt modi tempore vel praesentium vitae ipsam in, maiores recusandae quasi eius neque esse iste! Facere.
              Magni, corporis excepturi! Adipisci hic eum quo laudantium eveniet autem tempora, molestiae nam qui ip
              sum odio saepe nihil reprehenderit non maxime sequi exercitationem iure porro ab sed laborum eius quas?</p>
          </div>
        </div>
      </div>
    </section>
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

