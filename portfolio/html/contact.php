<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php
        include_once('header.php');
    ?>
</head>
<body>
    <div class="container-fluid mt-2 bg-light contact-section">
        <h1 class="text-center">CONTACT US</h1>
        <hr>
        <div class="row justify-content-evenly">
            <div class="col-md-6 col-lg-6">
                <h1>Contact us</h1>
                <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Your name</label>
                </div>
                <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingPassword" placeholder="email">
                <label for="floatingPassword">Your email</label>
                </div>
                <!-- <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="password">
                <label for="floatingPassword">Your password</label>
                </div> -->
                <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingPassword" placeholder="number">
                <label for="floatingPassword">Your number</label>
                </div>
                <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Message</label>
                </div>
                <div class="col-md-12 text-center">
             <button class="btn btn-primary btn-outline-success text-white btn-md col-md-6 col-sm-4 col-lg-12 mb-2" 
             type="submit" name="submit">Send Now</button>
             </div>
            </div>
           <div class="col-md-6 col-lg-6">
           <h1>Talk to us</h1>
           <h6><i class="bi bi-envelope text-info fs-5"></i> Email</h6>
                <a href="mailto:gyasuddinansari7854@gmail.com? subject= Hello!"
                 class="text-decoration-none" target="_blank">gyasuddinansari7854@gmail.com </a>               
            <h6><i class="bi bi-telephone text-info fs-5"></i> Phone</h6>
                <a href="#" class="text-decoration-none" target="_blank">                
                <span>+91 9263605357</span></a>
                <h6><i class="bi bi-geo-alt text-info fs-5"></i> Address</h6>
                <a href="#" class="text-decoration-none" target="_blank">                
                <span>Maker,Chapra,(Bihar) India</span></a>
                <div class="col-md-6 col-lg-6">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-decoration-none"><i class="bi bi-facebook text-info fs-3"></i></a>
                    <a href="#" class="text-decoration-none"><i class="bi bi-twitter text-dark fs-3"></i></a>
                    <a href="#" class="text-decoration-none"><i class="bi bi-linkedin text-primary fs-3"></i></a>
                </div>
                <div class="col-md-12 col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4340.015904853736!2d85.03632758994438!3d25.974347722285597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed36167458eeaf%3A0xd587c357361b9e40!2sSUNNI%20RIJVI%20JAMA%20MASJID!5e0!3m2!1sen!2sin!4v1715509806517!5m2!1sen!2sin"
                     style="border:0; margin-bottom:5px; height:200; width:100%;"
                     allowfullscreen loading="fast" referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
                </div>
            </div>
            </div>
           </div>
        </div>
    </div>
</body>
<?php
    include_once('footer.php');
?>
</body>
</html>
