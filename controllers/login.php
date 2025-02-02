<?php

session_start();


const BASE_PATH = __DIR__ . '/../';


include BASE_PATH . "Validator.php";
include BASE_PATH . 'repository/userRepository.php';

$link = '../css/signin.css';

$errors = [];

if(isset($_SESSION['user'])) {
  header ('location: ../controllers/index.php');
  exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (empty($_POST['email']) || empty($_POST['password'])){

    $errors = [
      "general" => 'Please fill out all the fields!'
    ];

  } else {
                   
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

    if(!empty($errors)) {
      require BASE_PATH . "theViews/login.view.php";
      exit();
    }

    $db = new Database();

    $loginUser = $db->query("select * from user where email = :email", [
        "email" => $email,
    ])->fetch();

    if(!$loginUser) {
      $errors = [
        'NoUser' => 'No matching account found for that email address!'
      ];
      require BASE_PATH . "theViews/login.view.php";
      exit();
    } 

    print_r($loginUser);
    if(password_verify($password,$loginUser['Password'])) {

    

      $userRepository = new UserRepository();

      $userRepository->login($loginUser);

      header("location: ../controllers/index.php");
      exit();
    } else {

      $errors = [
        'password-matching' => 'No matching account found for that email address and password!'
      ];
      require BASE_PATH . "theViews/login.view.php";
      exit();
    }
  }
}

require BASE_PATH . "theViews/login.view.php"; 

?>