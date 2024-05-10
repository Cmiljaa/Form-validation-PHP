<?php 

require_once 'config.php';

if(!isset($_POST['username']) || !isset($_POST['password']))
{
    die("You need to enter the username and password!");
}

function SanitizeData($word){
    return htmlspecialchars(trim(stripslashes($word)));  
}

$username = SanitizeData($_POST['username']);
$password = SanitizeData($_POST['password']);

$result = mysqli_query($base, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

if(!mysqli_num_rows($result) > 0)
    die("Wrong username or password!");

?>