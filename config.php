<?php 

mysqli_connect("localhost","root", "", "form_validation_db");

if(mysqli_connect_errno())
    echo "Database is not connected!";