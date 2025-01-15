<?php

const BASE_PATH = __DIR__ . '/../';

$link = '../css/Flights.css';
require BASE_PATH . "Datebase.php";

$db = new Database();

$arrivals = $db ->query('Select * from arrivals')->fetchAll();
$departures = $db->query('Select * from departures')->fetchAll();

require BASE_PATH . "theViews/flights.view.php";
