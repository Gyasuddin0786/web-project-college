<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fstudent";
//create connection
$con = new mysqli($servername,$username,$password,$dbname);
    //check connection
    if(mysqli_connect_error()){
        die("Database connection failed!").mysqli_connect_error();
    }
    else{
        // echo "Connection successfully!";
    }

?>
