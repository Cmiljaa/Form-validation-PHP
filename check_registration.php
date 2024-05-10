<?php 



function checkUsername($username){
   # $result = mysqli_query($base, "");
}

function SanitizeData($word){
    return htmlspecialchars(trim(stripslashes($word)));  
}