<?php 

if(!isset($_POST['username']) || !isset($_POST['password']))
{
    die("You need to enter the username and password!");
}

$korisnicko_ime = strtolower(SanitizeData($_POST['username']));
$password = strtolower(SanitizeData($_POST['password']));

if($korisnicko_ime === 'admin' && $password === 'admin123')
    echo "Successful!";
else
    echo "Access denied!"; 


function SanitizeData($word){
    return htmlspecialchars(trim(stripslashes($word)));
}