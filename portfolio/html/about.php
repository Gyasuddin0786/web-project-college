<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <?php
        include_once('header.php');
    ?>
</head>
<style>
  .meter {
    box-sizing: content-box;
    height: 8px;
    /* Can be anything */
    position: relative;
    margin: 30px 4px 0;
    /* Just for demo spacing */
    background: #555;
    border-radius: 25px;
    padding: 5px;
    box-shadow: inset 0 -1px 1px rgba(255, 255, 255, 0.2);
  }

  .meter>span {
    display: block;
    height: 100%;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    background-color: rgb(43, 194, 83);
    background-image: linear-gradient(center bottom,
        rgb(43, 194, 83) 37%,
        rgb(84, 240, 84) 69%);
    box-shadow: inset 0 2px 9px rgba(255, 255, 255, 0.3),
      inset 0 -2px 6px rgba(0, 0, 0, 0.4);
    position: relative;
    overflow: hidden;
  }

  .meter>span:after,
  .animate>span>span {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-image: linear-gradient(-45deg,
        rgba(25, 255, 250, 0.2) 25%,
        transparent 25%,
        transparent 50%,
        rgba(255, 255, 255, 0.2) 50%,
        rgba(25, 255, 250, 0.2) 75%,
        transparent 75%,
        transparent);
    z-index: 1;
    background-size: 50px 50px;
    animation: move 2s linear infinite;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    overflow: hidden;
  }

  .animate>span:after {
    display: none;
  }

  @keyframes move {
    0% {
      background-position: 0 0;
    }

    100% {
      background-position: 50px 50px;
    }
  }

  .orange>span {
    background-image: linear-gradient(#f1a165, #f36d0a);
  }

  .red>span {
    background-image: linear-gradient(#f0a3a2, #f42323);
  }
  .nostripes>span>span,
  .nostripes>span::after {
    background-image: none;
  }
</style>

<body>
  <div class="container-fluid mt-2 bg-light">
    <h1 class="text-center">ABOUT US</h1>
    <hr>
    <div class="row justify-content-evenly">
      <div class="col-md-6">
        <h3>Hey,</h3>
        <h4 class="text-danger"><span class="text-dark">I'm </span>Gyasuddin</h4>
        <h6>From Bihar in India.
          and I'm Bachelor <br> Students of Computer Engineer
          in (RK University) Gujarat.<br>
        </h6>
      </div>
      <div class="col-md-6">
        <img src="../images/profile.jpg" alt="about" class="img-fluid mb-2" 
        style="width:700px;height:350px;border-radius:8px;">
      </div>
    </div>
    <div class="container-fluid bg-light mt-5 py-5">
      <div class="row justify-content-evenly">
        <div class="col-md-3">
          <h3>EDUCATION</h3>
          <h5>INTERMEDIATE</h5>
          <p>Completed From RVM College,Saran (Bihar).</p>
          <h5>BACHELOR</h5>
          <p>Currently Studing <a href="https://rku.ac.in/" class="text-decoration-none" target="_blank">
            B.TECH(CE)</a> Computer Engineering RK University,<br> Rajkot Gujarat (India).</p>
        </div>
        <div class="col-md-3">
          <h3>EXPERIENCE</h3>
          <h6><i class="bi bi-arrow-right fs-5 text-info"></i> WEB DEVELOPER</h6>
          <p>I was responsible for all the in-house and client-based web development assignments. 
          </p>
          <h6><i class="bi bi-arrow-right fs-5 text-info"></i> UI/UX DESIGNER</h6>
          <p>I was a part of an amazing design team and worked together with them to help.</p>
            <h6><i class="bi bi-arrow-right fs-5 text-info"></i> APP DEVELOPER</h6>
          <p>Android developers are skilled professionals who specialize in creating applications for 
            devices running the Android operating system.</p>
        </div>
        <div class="col-md-3">
          <h3>SKILLS</h3>
          <div id="page">
            <div class="meter">
              <span style="width: 65%"></span>UI/UX DESIGN
            </div>
            <div class="meter orange nostripes">
              <span style="width: 85%"></span>WEB APP
            </div>
            <div class="meter red">
              <span style="width: 40%"></span>ANDROID APP
            </div>
            <div class="meter blue">
              <span style="width: 50%"></span>FIGMA DESIGN
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="container-fluid mt-3 bg-light mb-2">
    <div class="row justify-content-evenly">
      <h1 class="text-center">LET'S WORK TOGETHER</h1>
      <p class="text-center">Have any questions? We are always open to talk about your business, <br>
        new projects, creative opportunities and how we can help you.</p>
      <div class="col-md-12 text-center">
        <button class="btn  btn-outline-primary  btn-md col-md-2 mb-2">GET IN TOUCH</button>
      </div>
    </div>
  </div>
</body>
<?php
    include_once('footer.php');
    ?>
<script>
  $(".meter > span").each(function () {
    $(this)
      .data("origWidth", $(this).width())
      .width(0)
      .animate(
        {
          width: $(this).data("origWidth")
        },
        1200
      );
  });

</script>

</html>