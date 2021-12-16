<?php

require_once "./validator.php";





class Login {

    public static function search($email, $password, $conn){
        if($conn){
            $conn->prepare('SELECT * FROM users WHERE email = :email & password =:password');
            $stmt = $conn->bindParam(":email", $email);
            $stmt = $conn->bindParam(":password", $password);
            $result = $stmt->execute();
            var_dump($result->fetchAll());
        }
        

    }
    public static function login($email,$password,$conn){

        


    }
}