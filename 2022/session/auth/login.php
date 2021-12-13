<?php
include_once './validator.php';
$conn = new PDO('mysql:host=localhost;dbname=vanilla_blog','root','');

var_dump($conn->query("SELECT * FROM users WHERE email = 'r@e.c' AND password = '12345678'")->fetchAll());
echo '<br>';

class Login {

    protected $email;
    protected $password;
    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function search($conn){
        $stmt = $conn->prepare("SELECT * FROM Users WHERE email = :email AND password = :password ");
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':passwords', $this->password);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}

$validatedEmail = new Validator($_REQUEST['email']);
$validatedPassword = new Validator($_REQUEST['password']);
$login = new Login($validatedEmail->validate(), $validatedPassword->validate());
var_dump($login->email);
// var_dump($login->search($conn));