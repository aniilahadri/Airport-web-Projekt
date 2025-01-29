<?php
    const BASE_PATH = __DIR__ . "/../";
    include BASE_PATH . "repository/userRepository.php";

    $ur = new userRepository();
    $ur->logout();

    header("location:../controllers/index.php");
    exit();

?>