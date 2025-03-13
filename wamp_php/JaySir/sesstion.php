<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesstion pagge</title>

    <style>
    /* .btn {
    border-radius: 4px;
    width: 8%;
    height:2rem;
    background-color: blue;
    }
    .btn{
    color: white;
}
.btn:hover{
    background-color: red;
}
 */
</style>
</head>
<body>
<?php
  session_start();
  if(isset($_SESSION['username'])){
    //   echo "Welcome".$_SESSION['username'];
    ?>
    <form action="logout.php" method="post">
    <input type="submit" value="Logout" 
    class="btn btn-outline-primary btn-danger text-white mt-3 mb-3 " 
    name="submit" title="Logout" onclick="return confirm('Are You sure want to logout?')">
    </form>
    <?php
}
else{
    header('location:index.php');
}
?>
</body>
</html>