<?php

//const BASE_PATH = __DIR__ . '/../';
include __DIR__ . '/../' . 'Database.php';


class userRepository{
    private $connection; 

   
    function __construct() {
        $db = new Database();
        $this->connection = $db; 
    }


    function insertFlight($user) {
        $conn = $this->connection;

   
        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();

   
        $sql = "INSERT INTO user ( name, email, password) VALUES (:name,:email,:password)";

        $conn->query($sql,[
            ':name'=>$name,
            ':email'=>$email,
            ':password'=>password_hash($password, PASSWORD_BCRYPT)
            
        ]);

       
        echo "<script> alert('User has been inserted successfully!'); </script>";//fix
    }

    function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        
        $users = $conn->query($sql)->fetchAll(); 

        return $users; 
    }

    
    function getUserById($id) {
        $conn = $this->connection;

     
        $sql = "SELECT * FROM user WHERE id='$id'";

        
        $user = $conn->query($sql)->fetch(); 

        return $user;
    }

    
    function updateUser($id, $name,  $email,  $password) {
        $conn = $this->connection;


        $sql = "UPDATE user SET name=:name,  email=:email, password=:password WHERE id=:id";
 
        $conn->query($sql,[
            ':id'=>$id,
            ':name'=>$name,
            ':email'=>$email,
            ':password'=>password_hash($password, PASSWORD_BCRYPT)
            
        ]);

        echo "<script>alert('Update was successful');</script>";
    }

    
    function deleteUser($id) {
        $conn = $this->connection;

      
        $sql = "DELETE FROM user WHERE id=:id";

        $conn->query($sql,[
            ':id'=>$id
        ]); 

        echo "<script>alert('Delete was successful');</script>";
    }

}


?>
