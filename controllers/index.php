<?php
// $heading = 'Home-Airport';
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Database.php";

$db = new Database();

$arrivals = $db ->query('Select * from arrivals')->fetchAll();
$departures = $db->query('Select * from departures')->fetchAll();

$link = '../css/HomePage.css';

require BASE_PATH . "theViews/index.view.php";
