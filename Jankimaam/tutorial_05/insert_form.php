<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <form action="insert_form.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid mt-1 bg-light ">
            <div class="row col-md-3 m-auto">
                <h2 class="text-center mt-3">product form</h2>
        Enter Product ID: <input type="text" name="id" id="id"><br>
        Enter Product Name: <input type="text" name="name" id="name"><br>
        Enter Product Description: <textarea name="desc" type="text" id="desc" cols="20" rows="5"></textarea><br>
        Enter Product Quantity: <input type="number" name="quan" id="quan"><br>
        Enter Product Price: <input type="number" name="price" id="price"><br>
        Enter Product Image: <input type="file" name="image" id="image"><br><br>
        <input type="submit" value="Submit" name="submit" class=" btn btn-outline-success btn-primary col-12 text-white">
        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $quan = $_POST['quan'];
    $prize = $_POST['price'];
    $image = $_FILES['image']['name'];

    $sql = "INSERT INTO `products` (`name`, `desc`, `quan`, `price`, `image`) VALUES ( '$name', '$desc', '$quan', '$prize', '$image')";

    $result = mysqli_query($conn, $sql);
     if ($result) {
        echo "Submitted <br>";
    } else {
        echo "Not submitted";
    }

    if ($_FILES["image"]["name"] != "") {
        $allowed_types = array('image/jpeg', 'image/png', 'image/gif');
        if (in_array($_FILES['image']['type'], $allowed_types)) {
            $max_size = 10000 * 10024;
            if ($_FILES['image']['size'] <= $max_size) {
                if (!is_dir("uploads")) {
                    mkdir("uploads");
                }
                move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $_FILES['image']['name']);
                echo "Filename: " . $_FILES['image']['name'] . "<br>";
                echo "File tmp name: " . $_FILES['image']['tmp_name'] . "<br>";
                echo "File size: " . $_FILES['image']['size'] . " bytes<br>";
                echo "File type: " . $_FILES['image']['type'] . "<br>";
            } else {
                echo "<p class='error'>File size can't be greater than 1MB</p>";
            }
        } else {
            echo "<p class='error'>Please select a valid image file (JPEG, PNG, GIF)</p>";
        }
    } else {
        echo "upload image ";
    }
}

?>
</div>
</div>
</div>
    </form>
</body>

</html>