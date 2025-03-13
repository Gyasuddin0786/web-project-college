<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];   
    $con = mysqli_connect("localhost", "root", "", "wp2024"); 
    $q = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
        $ans = mysqli_fetch_array($q);
    if($username == $ans['username']) {
            $_SESSION['username'] = $ans['username'];
            header('location: display.php');
            exit();
        } 
    else{
        header('location:index.php');
        exit();
        } 
    
    }

   
?>