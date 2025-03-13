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
  <!-- <div class="album py-5 bg-body-tertiary"> -->
    <div class="container-fluid bg-light border border-danger mt-">
      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-lg-10 m-auto mt-5">
            <div class="col-lg-4 m-auto">
              <div class="container border border-info mb-5 mt-3 rounded">
            <form  id="form1" method="post">
            <h2 class="text-center mt-2">Login Here!</h2>
                <div class="form-group">
                    <input type="email" class="form-control col-12" id="email" placeholder="username" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control col-12" id="pwd" placeholder="password" name="pswd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                    <label class="form-check-label">
                      <a href="forget.php" class="ms-5 text-dark text-decoration-none" style="margin-left:40px;">Forget Password?</a>
                    </label>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-success text-white col-12 mb-2 mt-2">Submit</button>
                      <h6 class="text-center mb-3">Don't have Account?<a href="register.php" class="text-dark text-decoration-none">Sign Up</a></h6>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
include_once("footer.php");
?>
</div>
</body>
</html>