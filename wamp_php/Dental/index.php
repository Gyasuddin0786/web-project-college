<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Amozone</title>
  </head>
  <body style="background-color: aqua;">
    <nav class="navbar navbar-expand-lg navbar- bg-dark fixed-top">
  <div class="container-fluid">
  <a><img src="amazon.png" width="60px" height="60px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#Home" style="color:aqua;cursor:active;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contact" style="color: wheat;">Contact</a>
        </li>
        <li>
        <a class="nav-link" href="# Servises" style="color: wheat;">Services</a>
        </li>
        <li>
          <a class="nav-link" href="# About" style="color: wheat;">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: wheat;">
          Courses
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">CSS Course</a></li>
            <li><a class="dropdown-item" href="#">JAVA Course</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">HTML Course</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" style="border-radius: 10px;">
        <button class="btn btn-success" type="submit" style="border-radius: 10px; color:white">Search</button>
        <button class="btn btn-outline-success mx-2" type="login"style="border-radius: 10px; background:white; color:black">Login</button>
        <button class="btn btn-outline-success mx-2" type="submit" style="border-radius: 10px;background:white; color:black">SignUp</button>

      </form>
    </div>
  </div>
</nav>
<?php include 'index/_loginpage.php'?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>