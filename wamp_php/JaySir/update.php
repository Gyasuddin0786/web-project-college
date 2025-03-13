<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <?php
    include_once('sesstion.php');
    ?>
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
        
        if(!is_dir("uploads")){
            mkdir("uploads");
        }
        $p_name = $_FILES['s_photo']['name'];
        $p_t_name = $_FILES['s_photo']['tmp_name']; 
        $p_folder = "uploads/".$p_name;
        if(move_uploaded_file($p_t_name,$p_folder)){
        $q = mysqli_query($con,"UPDATE student SET s_id = '$s_id',s_name='$s_name',s_email='$s_email',
        s_password='$s_password', s_gender='$s_gender', 
        s_branch='$s_branch', s_mob='$s_mob', s_photo='$p_name' WHERE s_id='$s_id'");
    }
    if($q)
    {
        header('location:display.php');
    }
    else
    {
        echo "<script>alert('Updation Error')</script>";
    }
}
?>
<script>
    alertify.set('notifier','position', 'top-center');
  var notification = alertify.notify('Update Successfully!', 
  'success', 5, function(){  console.log('dismissed'); });
</script>

</body>
</html>