<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentists Website</title>

    <!--font awesome cdn link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CDN jQuery link -->
    <script src="jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
     integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
                        <a class="nav-link text-dark fs-1 offset-2" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-1 text-dark offset-2" href="about.php">about</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-1 text-dark offset-2" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-1  text-dark offset-2" href="#services"
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

    <!-- home section starts -->
    <!-- home section ends -->


</body>

</html>