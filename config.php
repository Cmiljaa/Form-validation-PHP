<?php 

$base = mysqli_connect("localhost","root", "", "database1");

if(mysqli_connect_errno())
    echo "Database is not connected!";