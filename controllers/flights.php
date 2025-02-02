<?php

session_start();
const BASE_PATH = __DIR__ . '/../';

$link = '../css/Flights.css';
require BASE_PATH . "repository/flightsRepository.php";

$flightsRepository = new flightsRepository();

$arrivals = $flightsRepository->getAllFlights("arrivals");
$departures = $flightsRepository->getAllFlights("departures");

require BASE_PATH . "theViews/flights.view.php";
