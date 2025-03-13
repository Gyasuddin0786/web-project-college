<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width: 30rem;
            height: 10rem;
            margin: auto;
            background-color: aquamarine;
            margin-top: 4rem;
            padding-top: 5rem;
            text-align: center;
            border-radius: .6rem;
        }
        #submit{
            margin-right: 2rem;
            border-radius: .5rem;
            background-color: cadetblue;
            width: 10rem;
            height: 1.5rem;
            color: white;
            
        }
        /* #file{
            width: 5rem;
            height: 3rem;
        } */
    </style>
</head>
<body>
    <form action="UploadFile.php" method="post" enctype="multipart/form-data">
        <div class="box">
            <div>
                <label for="">Upload your file:</label>
                <input type="file" name="f1" id="file" class="input"><br><br>
                <input type="submit" name="btn" id="submit" value="upload file">
            </div>
        </div>
    </form>
    <?php
    if(isset($_POST['btn'])){
        if($_FILES['f1']['name']==""){
            echo "Please select a file to upload";
        }
        else{
            if($_FILES['f1']['type']=="application/pdf"){
                if($_FILES['f1']['size']<=1024 * 1200){
                    if(!is_dir("uploads")){
                        mkdir("uploads");
                    }
                    move_uploaded_file($_FILES['f1']['tmp_name'],"uploads/".$_FILES['f1']['name']);
                    echo "<pre>";
                    echo "Filename:".$_FILES['f1']['name']."<br>";
                    echo "File temp name:".$_FILES['f1']['tmp_name']."<br>";
                    echo "File size:".$_FILES['f1']['size']."<br>";
                    echo "File type:".$_FILES['f1']['type']."<br>";
                    echo "<pre>";
                }
                else{
                    echo "File size cannot be greater than 100KB.";
                }
            }
            else{
                echo "Please select a PDF file to upload.";
            }
        }
    }
    ?>
</body>
</html>