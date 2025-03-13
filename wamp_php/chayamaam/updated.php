<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated</title>
</head>
<body>
    <?php
    $con = new mysqli("localhost", "root","","student");
    //update data in Mysql table
    $sqlupdate = "UPDATE teacher SET name='Niyazuddin'WHERE   id=23";
    if ($con->query($sqlupdate) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record:".$con->error;
    }
    ?> 
</body>
</html>