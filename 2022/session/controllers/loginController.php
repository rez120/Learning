<?php

// require_once "./../auth/validator.php";
// require_once "./../auth/login.php";
try{
    $conn = new PDO('mysql:host=localhost;port=8012;dbname=test', 'root', '');
    echo "success";
}catch(Exception $exception){
    echo 'error occured';
}




Login::login(Validator::validate($_REQUEST('email')),validate($_REQUEST('password')), $conn);