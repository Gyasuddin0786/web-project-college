<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
include_once("header.php");
?>
<!-- <div class="album py-5 bg-body-tertiary"> -->
<div class="container-fluid  bg-light border border-danger">
    <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-xs-12 col-sm-12">
        <h1 class="mt-2">Address</h1>
            <h4><i class="fa-solid fa-location-dot"></i> Main Campus</h4>
            RK University, <br> Bhavnagar Highway, Kasturbadham, <br> Rajkot, Gujarat, India 360020
            <br><br>

            <h4><i class="fa-solid fa-location-dot"></i> City Campus</h4>
            New 150ft Ring Road,<br> Mota Mawa,Kalawad Road,<br> Rajkot, Gujarat, India 360004.
            <br><br>
            <h4><i class="fa-solid fa-phone-volume"></i> Contact Details </h4>
            +91-9712489122 <br>
            +91-9925714450
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-xs-12 col-sm-12">
            <div class="container-fluid border border-info rounded mt-4 mb-3">
            <h1 class="mt-2 text-center">Contact Form</h1>
            <form action="/action_page.php" id="form1">
                <div class="form-group">
                    <input type="text" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                    <span id="fn_err"></span>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control mt-3" id="email" placeholder="Enter email" name="email">
                    <span id="em_err"></span>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control mt-3" id="mn1" placeholder="Enter Mobile Number" name="mn">
                  <span id="mn_err"></span>
                </div>
                <div class="form-group">
                    <textarea class="form-control mt-3" name="msg" id="msg1" cols="20" rows="2" placeholder="Message"></textarea>
                    <span id="msg_error"></span>

                </div>
                
                <button type="submit" class="btn btn-outline-primary btn-success col-12 text-white mt-1 mb-3">Submit</button>
            </form>
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