<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UploadFile2</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="box">
        <div>
            Select your file:<input type="file" name="f2"><br><br>
            <input type="submit" name="submit" id="submit" value="submit">

        </div>
    </div>
    </form>
    <?php
        $filename = $_FILES['f2']['name'];
        $filesize = $_FILES['f2']['size'];
        $filetype = $_FILES['f2']['type'];
        echo "File name is:".$filename."<br>";
        echo "File size is:".$filesize."<br>";
        echo "File type is:".$filetype."<br>";

    ?>
</body>
</html>