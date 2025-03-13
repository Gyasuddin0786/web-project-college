<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UploadFile3</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="box">
        <div>
            Select your file:<input type="file" name="f3"><br><br>
            <input type="submit" name="submit" id="submit" value="submit">

        </div>
    </div>
    </form>
    <?php
        if(!empty($_FILES['f3'])){
            $path = "uploads/";
            $path = $path.basename($_FILES['f3']['name']);
            if(move_uploaded_file($_FILES['f3']['tmp_name'],$path)){
                echo "File stored is specifed path.";
            }
            else{
                echo "File not uploaded";
            }
        }

    ?>
</body>
</html>