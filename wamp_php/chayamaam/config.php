<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>configure</title>
</head>
<body>
    <h1 style="text-align: center;">Sesstion variable</h1>
    <?php
session_start(); // Start the session

//Mysqli object-oriented
$servername = "localhost";
$username = "root";
$password = "";
//create connection
$con = new mysqli($servername,$username,$password="");
    //check connection
    if(mysqli_connect_error()){
        die("Database connection failed!").mysqli_connect_error();
    }
    else{
        echo "Connection successfully!";
    }

// Set a session variable
$_SESSION["username"] = "John Doe";

// Get a session variable
echo "Welcome, " . $_SESSION["username"];
?>
</body>
</html>