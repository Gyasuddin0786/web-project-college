<?php
if(isset($_REQUEST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enroll = $_POST['enroll'];

    echo "your email is:".$email."<br>";
    echo "your password is:".$password."<br>";
    echo "your enroll is:".$enroll."<br>";
    echo "<h1>You are successfully loged in.</h1>";

}
?>