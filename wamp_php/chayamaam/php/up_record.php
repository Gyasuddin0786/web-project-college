<?php
    include_once('config.php');
    $id = $_POST['id'];
    $fname =  $_POST['fname'];
    $lname = $_POST['lname'];
    $bdate = $_POST['bdate'];
    $sqlselect="UPDATE  boy SET fname = '$fname',lname = '$lname',bdate = '$bdate' WHERE id='$id';";
    if($con->query($sqlselect)===TRUE) {
        header("location:main.php");
        exit();
    }
    else{
        echo "Error updating record!".$con->error;
    }
?>