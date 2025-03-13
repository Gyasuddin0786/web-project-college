<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

</head>
<body>
<?php
  include_once('header.php');
  ?>
<form action="">
  <!-- <div class="album py-5 bg-body-tertiary"> -->
<div class="container-fluid bg-light border border-danger mt-3">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 m-auto mt-4">
        <div class="col-lg-4 m-auto">
          <div class="container border border-info mb-5 mt-3 rounded">
            <h2 class="text-center mt-2">Forget Password!</h2>
            <p class="text-center">If you don't remmember your password?</p>
            <form action="" id="form">
                <div class="form-group mt-3 py-2">
                    <input type="password" class="form-control col-12" id="pwd" placeholder="Enter old password" name="pswd">
                    <span id="pswd_err"></span>
                </div>
                <div class="form-group mt-3">
                    <input type="password" class="form-control col-12" id="pwd" placeholder="Enter new  password" name="pswd">
                    <span id="pswd_err"></span>
                </div>
                <div class="form-group mt-3">
                    <input type="password" class="form-control col-12" id="pwd" placeholder="Enter confirm  password" name="pswd">
                    <span id="pswd_err"></span>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-success text-white col-12  mt-1">Submit</button>
                <div class="form-group mt-2 text-center mb-3">
                            <a href="login.php" class="text-decoration-none">Back to login</a>

                        </div>
                    </div>
              </form>
            </div>
    </div>
    </div>
</div>
</div>
<?php
include_once("footer.php");
?>
</div>
</form>

</body>
</html>