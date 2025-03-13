<?php
    include_once('config.php');
    $id = $_GET['id'];
    $sqldelete = ("DELETE FROM boy WHERE id=  '$id'");
    if(mysqli_query($con,$sqldelete)){
        header('location:index.php');
        exit();
    }
    else{
        echo "Error  deleting record".$con->error;
    }
?>