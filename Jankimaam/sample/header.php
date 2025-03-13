<?php
    $u = $_SERVER['REQUEST_URI'];
    $u = parse_url($u,PHP_URL_PATH);
    $u_array = explode('/',$u);
    // echo $u_array[3];
?>
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

<nav class="navbar navbar-expand-lg navbar-light bg-dark fs-4">
    <a href="#"><img class="navbar-brand fs-3" src="image/logo.jpg" class="img-fluid" style="width:50px;height:50px;border-radius:60% ;margin-left:40px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupporte dContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white <?php
          if ($u_array['3'] == "home.php") {
            echo "active";
          } ?>" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white<?php
          if($u_array['3']=="about.php"){
            echo ' active';
          }?>" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php
          if($u_array['3']=="contact.php"){
            echo ' active';
          }?>" href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php
          if($u_array['3']=="event.php"){
            echo "active";
          }?>" href="event.php" tabindex="-1" aria-disabled="true">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php
          if($u_array['3']=="login.php"){
            echo "active";
          }?>" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php
          if($u_array['3']=="register.php"){
            echo "active";
          }?>" href="register.php" tabindex="-1" aria-disabled="true">Register</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">&nbsp;
        <button class="btn btn-outline-success btn-primary text-white" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
