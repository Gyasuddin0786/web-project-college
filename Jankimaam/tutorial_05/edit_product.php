<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <h2>Update Product details</h2>
    <form action="insert_form.php" method="post" enctype="multipart/form-data">
        Enter Product ID: <input type="text" name="id" id="id"><br>
        Enter Product Name: <input type="text" name="name" id="name"><br>
        Enter Product Description: <textarea name="desc" type="text" id="desc" cols="30" rows="10"></textarea><br>
        Enter Product Quantity: <input type="number" name="quan" id="quan"><br>
        Enter Product Price: <input type="number" name="price" id="price"><br>
        Enter Product Image: <input type="file" name="image" id="image"><br>
        <input type="submit" value="Submit" name="submit">
        <?php
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost","root","","product_master");
    $ans = mysqli_query($conn , "SELECT * FROM products WHERE id = '$id'");
    $row = mysqli_fetch_array($ans);
?>
</form>
</body>

</html>