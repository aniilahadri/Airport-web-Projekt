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
              <button class="details-button-user">Details</button>
          </div>
          <div class="square">
              <h1>Arrivals</h1>
              <h3>Total:</h3>
              <?php if(isset($ArrivalsCount)) :?>
                  <p><?= $ArrivalsCount["Arrivals"]?></p>
              <?php endif ?>
              <button class="details-button-arrival">Details</button>
          </div>
          <div class="square">
              <h1>Departures</h1>
              <h3>Total:</h3>
              <?php if(isset($DeparturesCount)) :?>
                  <p><?= $DeparturesCount["Departures"]?></p>
              <?php endif ?>
              <button class="details-button-departure">Details</button>
          </div>
          <div class="square">
              <h1>Suggestions</h1>
              <h3>Total:</h3>
              
              <?php if(isset($SuggestionsCount)) :?>
                  <p><?= $SuggestionsCount["Suggestions"]?></p>
              <?php endif ?>
              <button class="details-button-sug">Details</button>
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
            <th>Update</th>
            <th>Delete</th>
          </tr>
          <?php foreach($users as $user) :?>
          <tr>
            <td><?=$user['ID']?></td>
            <td><?=$user['Role']?></td>
            <td><?=$user['Name']?></td>
            <td><?=$user['Email']?></td>
            <td colspan="2"><?=$user['Password']?></td>
            <td><a href="#">Click</a></td>
            <td><a href="#">Click</a></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <a href="#" class="insert-user"><button>Insert into User</button></a>
        <table id="arrivals" class="arrival">
          <tr>
            <th>ID_Arrival</th>
            <th>Time</th>
            <th colspan="2">Destination</th>
            <th colspan="2">Airline</th>
            <th>Flight id</th>
            <th>Status</th>
            <th>Date</th>
            <th colspan="2">Takeoff_Time</th>
            <th>Update</th>
            <th>Delete</th>
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
            <td><a href="#">Click</a></td>
            <td><a href="#">Click</a></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <a href="#" class="insert-arrival"><button>Insert into Arrivals</button></a>
        <table id="departures" class="departure">
          <tr>
            <th>ID_Departure</th>
            <th>Time</th>
            <th colspan="2">Destination</th>
            <th colspan="2">Airline</th>
            <th>Flight id</th>
            <th>Status</th>
            <th>Date</th>
            <th colspan="2">Landing_Time</th>
            <th>Update</th>
            <th>Delete</th>
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
            <td><a href="#">Click</a></td>
            <td><a href="#">Click</a></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <a href="#" class="insert-departure"><button>Insert into Depratures</button></a>
        <table id="suggestions" class="suggestion">
          <tr>
            <th>ContactID</th>
            <th >Email</th>
            <th colspan="2">Message</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
          <?php foreach($suggestions as $suggestion) :?>
          <tr>
            <td><?=$suggestion['ContactID']?></td>
            <td><?=$suggestion['Email']?></td>
            <td colspan="2"><?=$suggestion['Message']?></td>
            <td><a href="#">Click</a></td>
            <td><a href="#">Click</a></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <a href="#" class="insert-suggestion"><button>Suggestions</button></a>
      </div>
    </main>

  <?php require BASE_PATH . 'partials/footer.php'?>  
  <script>
  const searchBar = document.querySelector('.searchBar');
  const searchIcon = document.querySelector('#search-div');
  const hamburger = document.querySelector('.hamburger');
  const detailsButtonUser = document.querySelector('.details-button-user');
  const detailsButtonArrival = document.querySelector('.details-button-arrival');
  const detailsButtonDeparture = document.querySelector('.details-button-departure');
  const detailsButtonSug = document.querySelector('.details-button-sug');
  const users = document.querySelector('#users');
  const arrivals = document.querySelector('#arrivals');
  const departures = document.querySelector('#departures');
  const suggestions = document.querySelector('#suggestions');
  const insertArrival = document.querySelector('.insert-arrival');
  const insertUser = document.querySelector('.insert-user');
  const insertDeparture = document.querySelector('.insert-departure');
  const insertSug = document.querySelector('.insert-suggestion');

  hamburger.onclick = function() {
    let navBar = document.querySelector('.nav-bar-mobile');
    navBar.classList.toggle("active");
  }

  searchBar.addEventListener('click',hiddenSearch);

  detailsButtonUser.addEventListener('click',function(){hiddenTable(users,insertUser)});
  detailsButtonArrival.addEventListener('click',function(){hiddenTable(arrivals,insertArrival)});
  detailsButtonDeparture.addEventListener('click',function(){hiddenTable(departures,insertDeparture)});
  detailsButtonSug.addEventListener('click',function(){hiddenTable(suggestions,insertSug)});

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
  function hiddenTable (table,button = null) {
    table.classList.toggle('unhidden');
    if(button)
    button.classList.toggle('unhidden');
  }
</script>  
</body>
</html>