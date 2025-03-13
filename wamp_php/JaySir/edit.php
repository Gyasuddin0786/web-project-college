<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <?php
    include_once('sesstion.php');
    ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","wp2024");
$ans = mysqli_query($con , "SELECT * FROM student WHERE s_id = '$id'");
$row = mysqli_fetch_array($ans);

?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 m-auto mt-5">
        <h2 class="text-center">Update Details</h2>
        <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="row g-3">
          <div class="col mt-3">
            <input type="text" class="form-control" placeholder="User ID" name="s_id" value="<?php echo $row['s_id']; ?>">
            <div class="col mt-3">
              <input type="text" class="form-control" placeholder="User Name" name="s_name"value="<?php echo $row['s_name']; ?>">
              <div class="col mt-3">
                <input type="email" class="form-control" placeholder="User Email" name="s_email" value="<?php echo $row['s_email']; ?>">
              </div>
              <div class="col mt-3">
                <input type="password" class="form-control" placeholder="User Password" name="s_password" value="<?php echo $row['s_password']; ?>">
              </div>
              <div class="col mt-3">
              <input type="radio" name="s_gender" value="M" 
              <?php if(isset($row['s_gender']) && $row['s_gender']=="M"){ echo "checked";}?>>Male
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="s_gender" value="F" 
                <?php if(isset($row['s_gender']) && $row['s_gender']=="F"){ echo "checked";}?>>Female
               &nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" name="s_gender" value="O" 
               <?php if(isset($row['s_gender']) && $row['s_gender']=="O"){ echo "checked";}?>>Other
              </div>
              <div class="col mt-3">
                <input type="text" class="form-control" placeholder="User Branch" name="s_branch" value="<?php echo $row['s_branch']; ?>">
                <div class="col mt-3">
                  <input type="number" class="form-control" placeholder="User Mob" name="s_mob" value="<?php echo $row['s_mob']; ?>">
                </div>
                <div class="col mt-3">
                <input type="file" class="form-control" name="s_photo" value="<?php echo $row['s_photo'];?>">
              </div>
                  <input type="submit" value="Update" class="btn btn-outline-success btn-primary text-white mt-3 col-12" name="submit">
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>        
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>
</html>