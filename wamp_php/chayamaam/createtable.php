<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    <?php
    $con = new mysqli("localhost","root","","student");
    
    // sql to create table
    $sqltable = "CREATE TABLE teacher (id INT(6) NOT NULL, PRIMARY KEY, name VARCHAR(30), sallary(INT(6) NOT NULL";
    if($con->query($sqltable)===TRUE){
        echo "Table teacher created successfully!";
    }
    else{
        echo "Error:".$sqltable."<br>".$con->error;
    }

    ?>
</body>
</html>