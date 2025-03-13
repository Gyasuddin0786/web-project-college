<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment Page</title>
    <!--font awesome cdn link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CDN jQuery link -->
    <script src="jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <!-- custom css link file -->
    <link rel="stylesheet" href="style.css">

    <!-- custom js file link -->
    <script src="script.js"></script>

</head>

<body>
        <!-- header section starts -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary p-4 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-1 text-center" href="#">Dental<span class="text-info">Care</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-1 offset-2" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-1 text-dark offset-2" href="about.php">about</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-1 text-dark offset-2" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-1  text-dark offset-2" href="services.php"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fs-2" href="#">Dental Implants</a></li>
                            <hr class="dropdown-divider">

                            <li><a class="dropdown-item fs-2" href="#">Smile Makeover</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fs-2" href="#">Teeth Whitening</a></li>
                            <hr class="dropdown-divider">

                            <li><a class="dropdown-item fs-2" href="#">Full mouth Rehabhulation</a></li>
                        </ul>
                    </li>&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <a class="nav-link fs-1  text-dark offset-2" href="reviews.php">Reviews</a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <a class="nav-link fs-1  text-dark offset-2 m-end" href="login.php">Login</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="login.php" class="link-btn">Make Apointment</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- header section ends -->


    <!-- contact section starts -->
    <section class="contact" id="contact">
        <h1 class="heading">make appointment</h1>

        <form action="<?php ?>" method="post">
            <?php
    // if(isset($message)){
    //     foreach($message as $message){
    //     echo '<p class="message">'.$message.'</p>';
    //     }
    // }
    ?>
            <span>your Name</span>
            <input type="text" name="name" placeholder="Enter your Name" class="box">
            <span>your Email</span>
            <input type="email" name="email" placeholder="Enter your Email" class="box">
            <span>your Number</span>
            <input type="number" name="number" placeholder="Enter your Number" class="box">
            <span>your appointment date</span>
            <input type="datetime-local" name="date" placeholder="enter your datetime-local" class="box">
            <input type="=submit" value="make appointment" name="submit" class="link-btn">
        </form>
    </section>
    <!-- contact section ends -->


</body>

</html>