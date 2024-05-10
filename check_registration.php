<?php 

require_once 'config.php';

$name = SanitizeData($_POST['name']);
$username = SanitizeData($_POST['username']);
$email = SanitizeData($_POST['email']);
$password = SanitizeData($_POST['password']);
$repeatPassword = SanitizeData($_POST['repeat_password']);

$password = password_hash($password, PASSWORD_DEFAULT);


mysqli_query($base, "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')"); 

header("Location: homepage.php");
exit();

function SanitizeData($word){
    return htmlspecialchars(trim(stripslashes($word)));  
}