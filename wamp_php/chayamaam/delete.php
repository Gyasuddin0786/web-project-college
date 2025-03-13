<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Query</title>
</head>
<body>
<?php
    $con = new mysqli("localhost","root","","student");
    //sql delete dataa from table
    $sqldelete = "DELETE FROM teacher  WHERE name='Sujeet'";
if($con->query($sqldelete)==TRUE){
    echo "<h2>Data deleted successfully.</h2>";
}
else{
    echo "Error:".$sqldelete."<br>".mysqli_error($con); 
}
?>
</body>
</html>