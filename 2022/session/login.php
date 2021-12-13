<?php 
require_once './components/header.php' ;



?>

<h1>Login</h1>

<a href="./index.php">index</a>


<form action="./auth/login.php" method="POST">
    <input name="email" type="email" placeholder="email">
    <input name="password" type="password" placeholder="password">
    <input name="submit" type="submit">
</form>

<?php require_once "./components/footer.php" ?>