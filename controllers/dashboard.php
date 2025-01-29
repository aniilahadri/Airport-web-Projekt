<?php

const BASE_PATH = __DIR__ . "/../";

session_start();

if(($_SESSION['user']['name']==='Admin') && ($_SESSION['user']['email']==='admin@gmail.com')) {

  require BASE_PATH . "theViews/dashboard.view.php";
  exit();

  } else {

    header ('location: ../controllers/index.php');
    exit();
  }


?>
