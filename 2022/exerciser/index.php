<?php 


class User{
    protected $name;
    protected $username;
    protected $email;
    protected $password;
    protected $isAdmin;
    protected $isActive;


    public function find(){}
    public function save(){}
    public function isAdmin(){}
    public function isActive(){}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>index</h1>
    <a href="./login.php">login</a>
    <a href="./register.php">register</a>


</body>

</html>