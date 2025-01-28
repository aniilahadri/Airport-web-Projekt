<?php

const BASE_PATH = __DIR__ . '/../';

$link = '../css/signin.css';
include_once BASE_PATH . 'models/user.php';
include_once BASE_PATH . 'repository/userRepository.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if (empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['password'])) {
        echo "Fill all fields!"; 
    } else {
        
        $name = $_POST['name'];              
        $email = $_POST['email'];       
        $password = $_POST['password'];  

        
       // $id = $username . rand(100, 999);

       
        $user = new User($name, $email, $password);

       
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}

require BASE_PATH . "theViews/signin.view.php";