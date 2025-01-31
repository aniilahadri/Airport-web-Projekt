<?php

session_start();

const BASE_PATH = __DIR__ . '/../';

$link = '../css/signin.css';
include_once BASE_PATH . 'models/user.php';
include_once BASE_PATH . 'repository/userRepository.php';
include_once BASE_PATH . "Validator.php";

$errors = [];

if(isset($_SESSION['user'])) {
  header ('location: ../controllers/index.php');
  exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repeat-password'])){
    $errors = [
      "general" => 'Please fill out all the fields!'
    ];
  } else {
      
    $name = $_POST['name'];              
    $email = $_POST['email'];       
    $password = $_POST['password']; 
      
        
    //validate
    if(! Validator::email($email)) {
      $errors = [
        "email"=>"Please enter a valid email address"
      ];
    }

    if(! Validator::string($password,8,255)) {
      $errors = [
        "password"=>"Please enter a valid password"
      ]; 
    }

    if(! empty($errors)) {
      require BASE_PATH . "theViews/signin.view.php";
      exit();
    }

    $db = new Database();

    $userExist = $db->query("select * from user where email = :email", [
        "email" => $email,
    ])->fetch();

    if($userExist) {
      $errors = [
        'exists' => 'User already exists!'
      ];
      require BASE_PATH . "theViews/signin.view.php";
      exit();
    } else {
      
      $user = new User($name, $email, $password);
          
      $userRepository = new UserRepository();

      $userRepository->insertUser($user);

      $_SESSION['user'] = [
        'id' => $user->getId(),
        'email' => $email
      ];

      session_regenerate_id(true);
      
      header("location: ../controllers/index.php");
      exit();
    }
  }
}
require BASE_PATH . "theViews/signin.view.php";