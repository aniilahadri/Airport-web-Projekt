<?php

session_start();
const BASE_PATH = __DIR__ . '/../';

$link = '../css/ContactUs.css';

require BASE_PATH . "Database.php";
require BASE_PATH . "Validator.php";



$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (empty($_POST['email']) || empty($_POST['message'])){

    $errors = [
      "general" => 'Please fill out all the fields!'
    ];

  } else {
                   
    $email = $_POST['email'];       
    $message = $_POST['message']; 
  
  
          
  //validate
    if(! Validator::email($email)) {
        $errors = [
          "email"=>"Please enter a valid email address"
        ];
        
        }
    
    if(!Validator::string($message,5,255)){
        $errors = [
            "message"=>"Please enter a message between 5 and 255 characters"
          ];
    }
    if(!empty($errors)) {
        require BASE_PATH . "theViews/contact.view.php";
        exit();
    }
    $db = new Database();
    $sql = "INSERT INTO contactus (email, message) VALUES (:email,:message)";
    $contact=$db->query($sql, [
        ":email"=>$email,
        ":message"=>$message
    ]);
    header("location:../controllers/index.php");
    exit();
  }
}


    
require BASE_PATH . "theViews/contact.view.php";
