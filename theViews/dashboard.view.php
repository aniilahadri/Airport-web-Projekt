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
          <div class="text-icon">
            <div class="text-square">
              <h1>Users</h1>
              <h3>Total:</h3>
              <?php if(isset($UserCount)) :?>
                  <p><?= $UserCount["Users"]?></p>
              <?php endif ?>
            </div>
            <img src="../images/users_people_icon.png" alt="users">
          </div>
          <div class="button-square">
            <button class="details-button-user">Details</button>
            <a href=""><button>Add</button></a>
          </div>
        </div>
        <div class="square">
            <div class="text-icon">
              <div class="text-square">
                <h1>Arrivals</h1>
              <h3>Total:</h3>
              <?php if(isset($ArrivalsCount)) :?>
                  <p><?= $ArrivalsCount["Arrivals"]?></p>
              <?php endif ?>
            </div>
            <img src="../images/land_flight_icon.png" alt="arrival">
          </div>
            <div class="button-square">
              <button class="details-button-arrival">Details</button>
              <a href=""><button>Add</button></a>
            </div>
        </div>
        <div class="square">
          <div class="text-icon">
            <div class="text-square">
              <h1>Departures</h1>
              <h3>Total:</h3>
              <?php if(isset($DeparturesCount)) :?>
                  <p><?= $DeparturesCount["Departures"]?></p>
              <?php endif ?>
            </div>
            <img src="../images/takeoff_line_icon.png" alt="departure">
          </div>
          <div class="button-square">
            <button class="details-button-departure">Details</button>
            <a href=""><button>Add</button></a>
          </div>
        </div>
        <div class="square">
          <div class="text-icon">
            <div class="text-square">
              <h1>Feedback</h1>
              <h3>Total:</h3>
              <?php if(isset($SuggestionsCount)) :?>
                  <p><?= $SuggestionsCount["Suggestions"]?></p>
              <?php endif ?>
            </div>
            <img src="../images/feedback_icon.png" alt="like">
          </div>
          <div class="button-square">
            <button class="details-button-sug">Details</button>
          </div>
        </div>
        <div class="square">
          <div class="text-icon">
            <div class="text-square">
              <h1>Parking</h1>
              <h3>Total:</h3>
              <?php if(isset($ParkingsCount)) :?>
                  <p><?= $ParkingsCount["Parkings"]?></p>
              <?php endif ?>
            </div>
            <img src="../images/parking_icon.png" alt="parking">
          </div>
          <div class="button-square">
            <button class="details-button-parking">Details</button>
          </div>
        </div>
      </div>
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
            <td>
              <a href="#"><img src="../images/update.png" alt="update"></a>
            </td>
            <td>
              <a href="#"><img src="../images/delete.png" alt="delete"></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
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
            <td>
              <a href="#"><img src="../images/update.png" alt="update"></a>
            </td>
            <td>
              <a href="#"><img src="../images/delete.png" alt="delete"></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
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
            <td>
              <a href="#"><img src="../images/update.png" alt="update"></a>
            </td>
            <td>
              <a href="#"><img src="../images/delete.png" alt="delete"></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <table id="suggestions" class="suggestion">
          <tr>
            <th>ContactID</th>
            <th>Email</th>
            <th colspan="4">Message</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
          <?php foreach($suggestions as $suggestion) :?>
          <tr>
            <td><?=$suggestion['ContactID']?></td>
            <td><?=$suggestion['Email']?></td>
            <td colspan="4"><?=$suggestion['Message']?></td>
            <td>
              <a href="#"><img src="../images/update.png" alt="update"></a>
            </td>
            <td>
              <a href="#"><img src="../images/delete.png" alt="delete"></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <table id="parkings" class="parking">
          <tr>
            <th>Parking_ID</th>
            <th>User_Id</th>
            <th >EntryDate</th>
            <th>EntryTime</th>
            <th>LeavingDate</th>
            <th>LeavingTime</th>
            <th>Delete</th>
          </tr>
          <?php foreach($parkings as $parking) :?>
          <tr>
            <td><?=$parking['Parking_ID']?></td>
            <td><?=$parking['User_Id']?></td>
            <td><?=$parking['Entry_Date']?></td>
            <td><?=$parking['Entry_Time']?></td>
            <td><?=$parking['Leaving_Date']?></td>
            <td><?=$parking['Leaving_Time']?></td>
            <td>
              <a href="#"><img src="../images/delete.png" alt="delete"></a>
            </td>
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
  const detailsButtonUser = document.querySelector('.details-button-user');
  const detailsButtonArrival = document.querySelector('.details-button-arrival');
  const detailsButtonDeparture = document.querySelector('.details-button-departure');
  const detailsButtonSug = document.querySelector('.details-button-sug');
  const detailsButtonPark = document.querySelector('.details-button-parking');
  const users = document.querySelector('#users');
  const arrivals = document.querySelector('#arrivals');
  const departures = document.querySelector('#departures');
  const suggestions = document.querySelector('#suggestions');
  const parkings = document.querySelector('#parkings');

  hamburger.onclick = function() {
    let navBar = document.querySelector('.nav-bar-mobile');
    navBar.classList.toggle("active");
  }

  searchBar.addEventListener('click',hiddenSearch);

  detailsButtonUser.addEventListener('click',function(){hiddenTable(users,arrivals,departures,suggestions,parkings)});

  detailsButtonArrival.addEventListener('click',function(){hiddenTable(arrivals,users,departures,suggestions,parkings)});

  detailsButtonDeparture.addEventListener('click',function(){hiddenTable(departures,users,arrivals,suggestions,parkings)});

  detailsButtonSug.addEventListener('click',function(){hiddenTable(suggestions,departures,users,arrivals,parkings)});

  detailsButtonPark.addEventListener('click',function(){hiddenTable(parkings,suggestions,departures,users,arrivals,)});

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
  function hiddenTable (table,table2,table3,table4,table5) {
    table.classList.toggle('unhidden');
    table2.classList.add('hidden');
    table3.classList.add('hidden');
    table4.classList.add('hidden');
    table5.classList.add('hidden');

    table.classList.remove('hidden');
    table2.classList.remove('unhidden');
    table3.classList.remove('unhidden');
    table4.classList.remove('unhidden');
    table5.classList.remove('unhidden');
  }
</script>  
</body>
</html>