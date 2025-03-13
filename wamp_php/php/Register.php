<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" 
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="Register_style.css">
</head>

<body>
    <!-- navbar starts here -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Gallary</a>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item active" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
      </ul>
      <form class="d-flex g-2">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary bg-dark" type="submit">Search</button>&nbsp;&nbsp;
        </form>
        <form class="d-flex g-2">
          <button class="btn btn-outline-primary  btn btn-light bg-dark" type="submit">Log in</button>&nbsp;&nbsp;
        </form>
        <form class="d-flex g-2">
          <button class="btn btn-outline-primary  bg-dark" type="submit">Sign Up</button>    
        </form>
    </div>
  </div>
</nav>
<!-- navbar ends here -->


<!-- sin up section starts -->
<section>
<!-- form start here -->
<div class="container">
    <h2>Registration</h2>
<form class="row g-4" id="form" action="Register.php">
    <div class="col-md-4">
    <label for="validationServer01" class="form-label">Fname<span>*</span></label>
    <input type="text" class="form-control" id="fname" maxlength="50" name="fname">
</div>
<div class="col-md-4">
    <label for="validationServer02" class="form-label">Lname<span>*</span></label>
    <input type="text" class="form-control" id="lname" maxlength="50" class="input" name="lname">
</div>
<div class="col-md-4">
    <label for="validationServer01" class="form-label">Enrollment<span>*</span></label>
    <input type="text" class="form-control" id="enroll" maxlength="12" class="input" name="enroll">
</div>
<div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Username<span>*</span></label>
    <div class="input-group has-validation">
        <span class="input-group-text">@gmail</span>
        <input type="text" class="form-control" id="email" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" maxlength="50" class="input" name="email">
    </div>
</div>
<div class="col-md-4">
  <label for="validationServer01" class="form-label">Password<span>*</span></label>
  <input type="password" class="form-control" id="password" maxlength="8" class="input" name="password">
</div>
<div class="col-md-4">
  <label for="validationServer01" class="form-label">Confirm_Password<span>*</span></label>
  <input type="password" class="form-control" id="cpassword" maxlength="8" class="input" name="cpassword">
</div>
<div class="col-md-4">
  <label for="validationServer04" class="form-label">City<span>*</span></label>
  <input type="text" class="form-control" id="city" class="input" name="city">
    <!-- <option>Patna</option>
    <option>Patna</option>
    <option>Patna</option>
    <option>Patna</option>
    <option>Patna</option>
    <option>Patna</option>
    <option>Patna</option>
    <option>Patna</option>
-->
  </select>
</div>
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Mob_No<span>*</span></label>
    <input type="text" class="form-control" id="mobile" maxlength="10" class="input" name="mobile">
</div>
<div class="col-md-4">
  <label for="validationServer05" class="form-label" >DOB<span>*</span></label>
  <input type="date" class="form-control" aria-describedby="validationServer05Feedback" id="dob" class="input" name="dob">
</div>
<div class="col-md-4">
    <label for="validationServer04" class="form-label"  id="course" name="course">Course<span>*</span></label>
    <select class="form-select" aria-describedby="validationServer04Feedback">
      <option value="Choose...">Choose...</option>
      <option>B.TECH(CE)</option>
      <option>B.TECH(ME)</option>
      <option>B.TECH(CVE)</option>
      <option>B.TECH(EE)</option>
      <option>B.TECH(CME)</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="validationServer04" class="form-label"  id="semester" name="semester">Semester<span>*</span></label>
    <select class="form-select" aria-describedby="validationServer04Feedback">
      <option selected abled value="Choose...">Choose...</option>
      <option>1th</option>
      <option>2th</option>
      <option>3th</option>
      <option>4th</option>
      <option>5th</option>
      <option>6th</option>
      <option>7th</option>
      <option>8th</option>
    </select>
  </div>


  <div class="col-md-4">
    <label for="validationServer04" class="form-label" id="state" name="state">State<span>*</span></label>
    <select class="form-select"  aria-describedby="validationServer04Feedback">
      <option selected disabled value="Choose...">Choose...</option>
      <option>Bihar</option>
      <option>Gujrat</option>
      <option>Mumbai</option>
      <option>Kerla</option>
      <option>UP</option>
      <option>MP</option>
      <option>AP</option>
      <option>Bangal</option>

    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" aria-describedby="invalidCheck3Feedback">
      <label class="form-check-label" for="invalidCheck3" id="label" id="checkbox">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <!-- <button class="btn btn-primary" type="submit" id="submit" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn btn-danger" type="reset" id="reset" name="reset">Reset</button>
  </div> -->
  <input type="submit"  id="submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset"  id="reset" name="reset">
</form>
</div>
</section>
<!-- sin up section ends-->


<!-- php section starts here -->
<?php
  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $enroll = $_POST['enroll'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $state = $_POST['state'];
    
  }
    echo "First name:".$fname."<br>";
    echo "last name:".$lname."<br>";
    echo "Enroll:".$enroll."<br>";
    echo "Email:".$email."<br>";
    echo "Password:".$password."<br>";
    echo "Confirm password:".$cpassword."<br>";
    echo "City:".$city."<br>";
    echo "Mobile:".$mobile."<br>";
    echo "DOB:".$dob."<br>";
    echo "Course:".$course."<br>";
    echo "Semester:".$semester."<br>";
    echo "State:".$state."<br>";
    
?>
<!-- php section ends here -->


<!-- validation script link here -->
<script src="script.js"></script>
</body>
</html>