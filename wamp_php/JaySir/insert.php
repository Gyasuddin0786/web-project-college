
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert page</title>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost", "root","", "wp2024");
    if(isset($_POST['submit'])){
        $s_id = $_POST['s_id'];
        $s_name = $_POST['s_name'];
        $s_email = $_POST['s_email'];
        $s_password = $_POST['s_password'];
        $s_gender = $_POST['s_gender'];
        $s_branch = $_POST['s_branch'];
        $s_mob = $_POST['s_mob'];
        $q = mysqli_query($con,"SELECT * FROM student where s_id = $s_id");
        $row = mysqli_fetch_row($q);
        if($row > 0){
            echo "The ID is Allready Exists.";
        }
        else{
    
        if(!is_dir("uploads")){
            mkdir("uploads");
        }
        $p_name = $_FILES['s_photo']['name'];
        $p_t_name = $_FILES['s_photo']['tmp_name']; 
        $p_folder = "uploads/".$p_name;
        if(move_uploaded_file($p_t_name,$p_folder)){
            // $s_photo = $_POST['s_photo'];
            $q = mysqli_query($con,"INSERT INTO student
         VALUES ('$s_id','$s_name','$s_email','$s_password','$s_gender','$s_branch','$s_mob','$p_name')");
        if($q){
            header('display.php');
        }
        else{ 
            echo "<br>Error!";
        }
    }
}
}
?>

</body> 
</html>