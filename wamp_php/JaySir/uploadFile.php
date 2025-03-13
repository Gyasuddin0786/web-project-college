<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 mt-5 border border-info mb-3 bg-light">
                <h3 class="text-info text-start fs-5">Upload your file</h3>
            <div class="input-group mb-5">
            <input type="file" class="form-control" id="inputGroupFile02" name="f1" id="">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-outline-primary btn-success text-white" name="btn">Submit</button>
        </div>
            </div>
        </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php
$dir = "uploads";
if (isset($_POST['btn'])) {
    if ($_FILES['f1']['name'] == "") {
        ?>
            <span style="color: red;">please select a file to uploads.</span>
<?php
} else {
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        if (move_uploaded_file($_FILES['f1']['tmp_name'], $dir . "/" . $_FILES['f1']['name'])) {
            ?>
                <span class="text-success">File Successfully uploaded!</span>
<?php
} else {
            ?>
                <span class="text-danger">Error in uploding file</span>
<?php
}

    }
}
if (!is_dir(($dir))) {
    ?>
        <span class="text-danger">Your upload directry is empty.please upload file to view contents.</span><br>
<?php

} else {
    $h = opendir($dir);
    ?>
        <table border="2" style="border-collapse: collapse;background-color:azure;">
        <tr>
            <th>Sr.no</th>
            <th>Filename </th>
            <th>Delete </th>
            <th>Download </th>
        </tr>
        <?php
$i = 1;
    while (($file = readdir($h)) !== false) {
        if ($file != "." && $file != "..") {
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $file; ?></td>
                    <td>
                        <a href="delete.php?file_name=<?php echo $file; ?>">
                        <input type="button" value="Delete"class="btn btn-outline-primary btn-success text-white">
                    </a>
                    </td>
                    <td>
                        <a href="download.php?file_name=<?php echo $file; ?>">
                        <input type="button" value="Download" class="btn btn-outline-primary btn-success text-white">
                    </a>
                    </td>
                </tr>
<?php
$i++;
        }
    }
    ?>
    <?php
}
?>
</table>
</body>
</html>