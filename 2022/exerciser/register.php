<?php

$username = $password = $passwordRepeat = '';
    

$errors = ['username'=>'', 'password'=>''];

if(isset($_POST['submit'])){

    

    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }else{
        $errors['username'] = 'username error.';
    }

    if(isset($_POST['password']) && isset($_POST['password_repeat'])){

        $password = $_POST['password'];
        $passwordRepeat = $_POST['password_repeat'];
        
        if($password !== $passwordRepeat){
            
            $errors['password'] = 'password error';
        }
        
    }else{
        $errors['password'] = 'password error';
    }


    if(array_reduce($errors, fn($ac, $val)=>$ac . $val) == false);
    
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
    <h2>Register</h2>
    <a href="./index.php">index</a>

    <form action="" method="POST">
        <input name="username" type="text" placeholder="username" value="<?php echo htmlspecialchars($username); ?>">
        <?php echo $errors['username'] ?? ''; ?>
        <br>
        <input name="password" type="password" placeholder="password">
        <?php echo $errors['password']; ?>
        <br>
        <input name="password_repeat" type="password" placeholder="repeat password">
        <br>
        <input name="submit" type="submit">
    </form>

</body>

</html>