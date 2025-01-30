<?php

class User {

    private $id;
    private $role;        
    private $name;         
    private $email;       
    private $password;  
    
    function __construct($name, $email, $password) {          
        $this->name = $name;             
        $this->email = $email;        
        $this->password = $password;   
    }

    function getId() {
        return $this->id;
    }
    function getRole(){
        return $this->role;
    }

    function getName() {
        return $this->name;
    }
  
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }
}
?>
