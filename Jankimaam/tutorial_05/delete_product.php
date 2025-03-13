<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","product_master");
$q = mysqli_query($conn,"DELETE FROM products where id = '$id'");
if($q){
    header('location:display_data.php');
}
else{
    echo "error in delete operation.";
}
?> 

</body>
</html>