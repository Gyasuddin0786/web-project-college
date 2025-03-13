<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create db</title>
</head>
<body>
    <?php
    include 'config.php';
    //create database
    $sql = "create database student";
    if($con->query($sql)=== TRUE){
        echo "Database Created Successfully!";
    }
    else{
        echo "Error in database creating!".$con->error;
    }
    $con->close();
    ?>
</body>
</html>