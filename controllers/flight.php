<?php

const BASE_PATH = __DIR__ . '/../';

$link = '../css/Flight.css';
require BASE_PATH . "Datebase.php";

$db = new Database();

if(isset($_GET['ID_Arrival'])) {
  $arrival = $db ->query('Select * from arrivals where ID_Arrival =:id',[
    ':id' =>$_GET['ID_Arrival']
  ])->fetch();
}else if(isset($_GET['ID_Departure'])) {
  $departure = $db->query('Select * from departures where ID_Departure =:id',[
    ':id' => $_GET['ID_Departure']
  ])->fetch();
}else {
  echo 'Something went wrong we could not load the flight';
}

require BASE_PATH . "theViews/flight.view.php";
