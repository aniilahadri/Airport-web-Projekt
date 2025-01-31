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
      <div class="square-container">
          <div class="square">
              <h1>Users</h1>
              <h3>Total:</h3>
              <?php if(isset($UserCount)) :?>
                  <p><?= $UserCount["Users"]?></p>
              <?php endif ?>
              <button class="details-button">Details</button>
          </div>
          <div class="square">
              <h1>Arrivals</h1>
              <h3>Total:</h3>
              <?php if(isset($ArrivalsCount)) :?>
                  <p><?= $ArrivalsCount["Arrivals"]?></p>
              <?php endif ?>
              <button class="details-button">Details</button>
          </div>
          <div class="square">
              <h1>Departures</h1>
              <h3>Total:</h3>
              <?php if(isset($DeparturesCount)) :?>
                  <p><?= $DeparturesCount["Departures"]?></p>
              <?php endif ?>
              <button class="details-button">Details</button>
          </div>
          <div class="square">
              <h1>Suggestions</h1>
              <h3>Total:</h3>
              
              <?php if(isset($SuggestionsCount)) :?>
                  <p><?= $SuggestionsCount["Suggestions"]?></p>
              <?php endif ?>
              <button class="details-button">Details</button>
          </div>
      </div><br>
      <div class="table-container">
        <table id="users" class="users">
          <tr>
            <th>ID</th>
            <th>Role</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Password</th>
          </tr>
          <?php foreach($users as $user) :?>
          <tr>
            <td><?=$user['ID']?></td>
            <td><?=$user['Role']?></td>
            <td><?=$user['Name']?></td>
            <td><?=$user['Email']?></td>
            <td><?=$user['Password']?></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <table id="arrival" class="arrival">
          <tr>
            <th>ID_Arrival</th>
            <th>Time</th>
            <th colspan="2">Destination</th>
            <th colspan="2">Airline</th>
            <th>Flight id</th>
            <th>Status</th>
            <th>Date</th>
            <th colspan="2">Takeoff_Time</th>
          </tr>
          <?php foreach($arrivals as $arrival) :?>
          <tr>
            <td><?=$arrival['ID_Arrival']?></td>
            <td><?=$arrival['Time']?></td>
            <td colspan="2"><?=$arrival['Destination']?></td>
            <td colspan="2"><?=$arrival['Airline']?></td>
            <td><?=$arrival['Flight_Id']?></td>
            <td><?=$arrival['Status']?></td>
            <td><?=$arrival['Date']?></td>
            <td colspan="2"><?=$arrival['Takeoff_Time']?></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <table id="departure" class="departure">
          <tr>
            <th>ID_Departure</th>
            <th>Time</th>
            <th colspan="2">Destination</th>
            <th colspan="2">Airline</th>
            <th>Flight id</th>
            <th>Status</th>
            <th>Date</th>
            <th colspan="2">Landing_Time</th>
          </tr>
          <?php foreach($departures as $departure) :?>
          <tr>
            <td><?=$departure['ID_Departure']?></td>
            <td><?=$departure['Time']?></td>
            <td colspan="2"><?=$departure['Destination']?></td>
            <td colspan="2"><?=$departure['Airline']?></td>
            <td><?=$departure['Flight_Id']?></td>
            <td><?=$departure['Status']?></td>
            <td><?=$departure['Date']?></td>
            <td colspan="2"><?=$departure['Landing_Time']?></td>
          </tr>
          <?php endforeach; ?>
        </table>
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