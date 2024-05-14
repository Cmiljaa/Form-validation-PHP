<?php 

require_once 'config.php';
require_once 'functions.php';

session_start();

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
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)";

        $run = $base -> prepare($sql);

        $run -> bind_param("ssss", $name, $username, $email, $password);

        $run -> execute();

        $_SESSION['username'] = $username;
        header("Location: homepage.php");
        exit();
    }
}