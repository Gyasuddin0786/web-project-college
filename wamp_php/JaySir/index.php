<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

</head>
<style>
.container{
    width: 50%;
    height: 10%;
}
.btn-color{
  background-color:darkcyan;
  color: #fff;
  
}

.profile-image-pic{
  height: 170px;
  width: 200px;
  object-fit: cover;
}

.cardbody-color{
  background-color:lightblue !important;
}
a{
  text-decoration: none;
}
</style>
<body>
<form action="check_login.php" method="post">
        <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5">
            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" 
              class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Username" name="username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color w-100" name="submit">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-3 text-dark mt-3">Not
              Registered? <a href="#" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    </form>    
    <?php
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
      </body>

</html>