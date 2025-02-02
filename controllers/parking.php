<?php

session_start();

const BASE_PATH = __DIR__ . '/../';

$link = '../css/ParkingPage.css';
require BASE_PATH . "Database.php";

$errors = [];
$message = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  if(empty($_POST['entry-date']) || empty($_POST['entry-time']) || empty($_POST['leaving-date']) || empty($_POST['leaving-time'])) {
    $errors = [
      'general' => 'Please fill out all the fields!'
    ];
  } else {

    $entryDate = str_replace('/','-',$_POST['entry-date']);
    $entryTime = $_POST['entry-time'];
    $leavingDate = str_replace('/','-',$_POST['leaving-date']);
    $leavingTime = $_POST['leaving-time'];
    $currentDate = date('Y-m-d');
    $currentTime = date('H:i');

    if($entryDate < $currentDate) {
      $errors = [
        'currentDate' => 'Please enter a valid entry date!'
      ];
    }

    if($entryDate === $currentDate &&  $entryTime < $currentTime) {
      $errors = [
        'currentTime' => 'Please enter a valid entry time!'
      ];
    }

    if($entryDate > $leavingDate) {
      $errors = [
        'date' => 'Please enter valid dates!'
      ];
    } 
    
    if($entryDate === $leavingDate && $entryTime > $leavingTime) {
      $errors = [
        'time' => 'Please enter a valid entry and leaving time!'
      ];
    }
    if(! empty($errors)) {
      require BASE_PATH . "theViews/parking.view.php";
      exit();
    }

    $db = new Database();
    
    $parking =$db->query("INSERT INTO parking (User_Id,User_Email,Entry_Date,Entry_Time,Leaving_Date,Leaving_Time) VALUES(:user,:email,:entryDate,:entryTime,:leavingDate,:leavingTime)",[
      ':user' => $_SESSION['user']['id'],
      ':email' => $_SESSION['user']['email'],
      ':entryDate' => $entryDate,
      ':entryTime' =>$entryTime,
      ':leavingDate' => $leavingDate,
      ':leavingTime' => $leavingTime
    ]);

    $message = 'Your parking space has been reserved, for more details we will send you an email.';
    require BASE_PATH . "theViews/parking.view.php";
    exit();
  }

}

require BASE_PATH . "theViews/parking.view.php";
