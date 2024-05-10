<?php 

require_once 'config.php';
require_once 'check_registration.php';

$name = SanitizeData($_POST['name']);
$username = SanitizeData($_POST['username']);
$email = SanitizeData($_POST['email']);
$password = SanitizeData($_POST['password']);
$repeatPassword = SanitizeData($_POST['repeat_password']);

$password = password_hash($password, PASSWORD_DEFAULT);

mysqli_query($base, "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')"); 

function SanitizeData($word){
    return htmlspecialchars(trim(stripslashes($word)));  
}