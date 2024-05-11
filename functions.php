<?php 

require_once 'config.php';

function checkName($name){

    $nameer = [];

    if($name === ''){
        array_push($nameer, "Name is empty!");
    }

    if(maxLen($name, 50)){
        array_push($nameer, "Name must have less than 50 characters!");
    }

    return $nameer;
}

function checkPassword($password){

    $passworder = [];

    if(emptyField($password)){
        array_push($passworder, "Password is empty!");
    }

    return $passworder;
}

function checkEmail($email){

    $emailer = [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($emailer, "Email is invalid!");
    }

    return $emailer;
}

function checkUsername($username, $base){

    $usernameer = [];

    $check = mysqli_query($base, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($check) > 0){
        array_push($usernameer, "That username is taken!");
    }

    if(emptyField($username)){
        array_push($usernameer, "Username is empty!");
    }

    if(maxLen($username, 50)){
        array_push($usernameer, "Username is too long!");
    }

    foreach ($usernameer as $key) {
        echo $key;
    }

    return $usernameer;
}

function checkRpassword($rpassword, $password){
    
    $rpassworder = [];

    if($rpassword !== $password){
        array_push($rpassworder, "Passwords do not match");
    }
    
    return $rpassworder;
}

function emptyField($field) { return $field === ''; }

function maxLen($field, $maxlen) { return strlen($field) > $maxlen; }

function SanitizeData($word){
    return htmlspecialchars(trim(stripslashes($word)));  
}