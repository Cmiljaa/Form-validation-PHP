<?php 
require_once 'config.php';
require_once 'functions.php';

session_start();

if(!isset($_POST['username']) || !isset($_POST['password']))
{
    die("You need to enter the username and password!");
}

$username = strtolower(SanitizeData($_POST['username']));
$password = SanitizeData($_POST['password']);




$sql= "SELECT * FROM users WHERE username = ?";

$run = $base -> prepare($sql);

$run -> bind_param("s", $username);

$run -> execute();

$result = $run -> get_result();

if($result -> num_rows == 1)
{
    $user = mysqli_fetch_assoc($search);
    if(password_verify($password, $user['password'])){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
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