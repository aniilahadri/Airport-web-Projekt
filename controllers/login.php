<?php/*

const BASE_PATH = __DIR__ . '/../';

//include BASE_PATH . "Database.php";
include BASE_PATH . "Validator.php";
include BASE_PATH . 'repository/userRepository.php';

$link = '../css/signin.css';

$email = $_POST["email"];
$password = $_POST["password"];

$errors = [];

//validate
if(! Validator::email($email)) {
    $errors["email"] = "Please enter a valid email address";
}

if(! Validator::string($password,7,255)) {
    $errors["password"] = "Please enter a password of at least seven characters";
}



if(! empty($errors)) {
    $attributes = [
        'errors'=>$errors
    ];
    require BASE_PATH . 'theViews/login.view.php';
}


//check if the account exists
$db = new Database();
$ur = new userRepository();


$user = $db->query("select * from users where email = :email", [
    "email" => $email,
])->fetch();

//dd($user);

if($user) {
    header("location: ../controllers/index.php");
    exit();
} else {
    $db->query("insert into users (password,email) values (:password ,:email)", [
        "email" => $email,
        "password" => password_hash($password, PASSWORD_BCRYPT)
    ]);

  $ur ->login($user);

    header("location: ../controllers/index.php");
    exit();
}

require BASE_PATH . "theViews/login.view.php"; */
?>