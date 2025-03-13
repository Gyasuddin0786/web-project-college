<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../css/style.css">

  <?php
include_once 'header.php';
?>
</head>
<bod>
  <div id="carouselExampleCaptions" class="carousel slide-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/website1.png" class="d-block w-100" alt="..." style="height: 650px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/uiux.jpg" class="d-block w-100" alt="..." style="height: 650px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/app.png" class="d-block w-100" alt="..." style="height: 650px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <div class="container-fluid mt-3 mb-3 bg-light py-3">
      <div class="row justify-content-evenly text-center">
        <div class="col-md-3 mt-2">
          <div class="card bg-light border border-primary">
          <div class="card-body">
          <h1><i class="bi bi-code-square text-primary"></i></h1>
          <h5>WEB APP</h5>
            <p class="card-text">I was responsible for all the in-house and client-based web development assignments.
               I take pride in having helped the best of clients.</p>
            <a href="#" class="btn btn-outline-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-2">
          <div class="card bg-light border border-primary">
          <div class="card-body">
          <h1><i class="bi bi-pencil-square text-primary"></i></h1>
                <h5>UI/UX DESIGNER</h5>
                <p class="card-text">I was a part of an amazing design team and worked together with them to
                   help design and develop apps and websites for different clients of the company.</p>
            <a href="#" class="btn btn-outline-primary">Learn more</a>
          </div>
        </div>
    </div>
    <div class="col-md-3 mt-2">
          <div class="card bg-light border border-primary">
          <div class="card-body">
          <h1><i class="bi bi-phone-flip text-primary"></i></h1>
                <h5>ANDROID APP</h5>
                <p class="card-text">Android developers are skilled professionals who specialize in creating
                   applications for devices running the Android operating system.</p>
            <a href="#" class="btn btn-outline-primary">Learn more</a>
          </div>
        </div>
    </div>
      </div>
    </div>
  </div>
</body>
<?php
include_once 'footer.php';
?>
</html>