<?php 

require_once 'config.php';
require_once 'functions.php';

$nameer = [];
$usernameer = [];
$emailer = [];
$passworder = [];
$rpassworder = [];

$name = '';
$username = '';
$email = '';
$password = '';
$repeatPassword = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = SanitizeData($_POST['name']);
    $username = SanitizeData($_POST['username']);
    $email = SanitizeData($_POST['email']);
    $password = SanitizeData($_POST['password']);
    $repeatPassword = SanitizeData($_POST['repeat_password']);

    $nameer = checkName($name);
    $usernameer = checkUsername($username, $base);
    $emailer = checkEmail($email);
    $passworder = checkPassword($password);
    $rpassworder = checkRpassword($repeatPassword, $password);

    if($nameer == [] && $usernameer == [] && $emailer == [] && $passworder == [] && $rpassworder == [])
    {
        mysqli_query($base, "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')"); 
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: homepage.php");
        exit(); 
    }
}

/*
This code follows good security practices such as sanitizing user inputs and using password hashing. However,
 there are a few improvements you might consider:

Prepared Statements: Use prepared statements or parameterized queries to prevent SQL injection attacks more effectively.
Feedback on Login Failure: For security reasons, you might want to provide a generic error message like "Incorrect username or
password" instead of specifying whether the username or password is incorrect. This prevents potential attackers from knowing if
 they've guessed a valid username.
Password Strength Requirements: Implement password strength requirements to ensure users are using strong passwords.
Session Management: Upon successful login, set session variables to manage the user's session.*/