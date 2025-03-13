<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/validator.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
include_once("header.php");
?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 m-auto">
            <h2>Add Slider Images</h2>
            <form action="slider_image.php" id="form1" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image1">Select image:</label>
                    <input type="file" class="form-control" id="image" name="slider">
                    <span id="em_err"></span>
                </div>

                <input type="submit" class="btn btn-outline-primary btn-success text-white mt-2 col-lg-12" name="btn" value="Submit"/>
            </form>
        </div>
    </div>
    </div>
</div>

<br>
<?php
include_once("footer.php");
?>
<?php
if (isset($_POST['btn'])) {
    $image_name = uniqid() . $_FILES['slider']['name'];
    $con = mysqli_connect("localhost", "root", "", "sample");
    $q = "INSERT INTO `image_slider`(`image_name`) VALUES ('$image_name')";

    if (mysqli_query($con, $q)) {
        if (!is_dir("image/slider")) {
            mkdir("image/slider");
        }
        move_uploaded_file($_FILES['slider']['tmp_name'], "image/slider/" . $image_name);
        // echo "image uploaded successfully";
    } else {
        echo "Error inn uploading image";
    }
}
?>