<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete page</title>
    <?php
        include_once('sesstion.php');
    ?>
</head>
<body>
<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","wp2024");
$q = mysqli_query($con,"DELETE FROM student where s_id = '$id'");
if($q){
    header('location:display.php');
}
else{
    echo "error in delete operation.";
}
?> 
</body>
</html>