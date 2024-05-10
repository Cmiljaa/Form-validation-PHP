<?php 

require_once 'config.php';

if(!isset($_POST['username']) || !isset($_POST['password']))
{
    die("You need to enter the username and password!");
}

function SanitizeData($word){
    return htmlspecialchars(trim(stripslashes($word)));  
}

$username = strtolower(SanitizeData($_POST['username']));
$password = SanitizeData($_POST['password']);
echo $password;
$password = password_hash($password, PASSWORD_DEFAULT);

echo $username; echo $password;

$result = mysqli_query($base, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

if(mysqli_num_rows($result) < 1){
    die("Wrong username or password!");
}
else{
    header("Location: homepage.php");
    exit();
}

?>