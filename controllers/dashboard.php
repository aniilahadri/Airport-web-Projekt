<?php

session_start();

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . "Database.php";
$link = "../css/Dashboard.css";

$db = new Database();


if($_SESSION['user']['role']==='Admin')  {

  $User = $db->query("Select count(*) as Users From user")->fetch();
  $Arrivals = $db->query("Select count(*) as Arrivals From arrivals")->fetch();
  $Departures = $db->query("Select count(*) as Departures From departures")->fetch();
  $Suggestions = $db->query("Select count(*) as Suggestions From contactus")->fetch();

  require BASE_PATH . "theViews/dashboard.view.php";
  exit();

  } else {

    header ('location: ../controllers/index.php');
    exit();
  }




?>
