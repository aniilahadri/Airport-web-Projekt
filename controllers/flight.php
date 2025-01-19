<?php

const BASE_PATH = __DIR__ . '/../';

$link = '../css/Flights.css';
require BASE_PATH . "Datebase.php";

$db = new Database();


$arrival = $db ->query('Select * from arrivals where ID =:id',[
  ':id' =>$_GET['ID']
])->fetch();


$departure = $db->query('Select * from departures where ID =:id',[
  ':id' => $_GET['ID']
  ])->fetch();

require BASE_PATH . "theViews/flight.view.php";
