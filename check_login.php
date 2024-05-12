<?php 

require_once 'config.php';
require_once 'functions.php';

if(!isset($_POST['username']) || !isset($_POST['password']))
{
    die("You need to enter the username and password!");
}

$username = strtolower(SanitizeData($_POST['username']));
$password = SanitizeData($_POST['password']);

$search = mysqli_query($base, "SELECT * FROM users WHERE username = '$username'");

if(mysqli_num_rows($search) == 1)
{
    $user = mysqli_fetch_assoc($search);
    if(password_verify($password, $user['password'])){
        header("Location: homepage.php");
        exit();
    }
    else{
        echo "Incorrect password!";
    }
}
else{
    echo "Incorrect username!";    
}

?>