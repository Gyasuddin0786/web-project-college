<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="stylesheet" href="../css/style.css">

    <style>
body {
    place-items: center;
}
.progress {
    position: relative;
    top: 8%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #ddd;
    height: 30px;
    width: 300px;
    border-radius: 20px;
}
.progress-done {
font-family: Verdana, Geneva, Tahoma, sans-serif;    font-weight: bolder;
    color: #ff0;
    height: 100%;
    background: linear-gradient(to left,rgb(25, 2, 140),rgb(240, 199, 230));
    border-radius: 20px;
    display: grid;
    place-items: center;
    width: 0;
    box-shadow: 0 0 3px -5px rgb(253, 2, 140), 0px 3px 150px rgb(253, 2, 140);
    transition: width .5s ease;
}
.progress1 {
    position: relative;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -60%);
    background: #ddd;
    height: 20px;
    width: 300px;
    border-radius: 20px;
}

.progress-done1 {
font-family: Verdana, Geneva, Tahoma, sans-serif;    font-weight: bolder;
    color: #fff;
    height: 100%;
    background: linear-gradient(to left,rgb(28, 200, 10),rgb(24, 199, 230));
    border-radius: 20px;
    display: grid;
    place-items: center;
    width: 0;
    box-shadow: 0 0 3px -5px rgb(253, 2, 140), 0px 3px 150px rgb(253, 2, 140);
    transition: width .5s ease;
}
.progress2 {
    position: relative;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -60%);
    background: #ddd;
    height: 20px;
    width: 300px;
    border-radius: 20px;
}

.progress-done2 {
font-family: Verdana, Geneva, Tahoma, sans-serif;    font-weight: bolder;
    color: blue;
    height: 100%;
    background: linear-gradient(to left,rgb(25, 2, 200),rgb(240, 199, 250));
    border-radius: 20px;
    display: grid;
    place-items: center;
    width: 0;
    box-shadow: 0 0 3px -5px rgb(253, 2, 140), 0px 3px 150px rgb(253, 2, 140);
    transition: width .5s ease;
}
.progress3 {
    position: relative;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -60%);
    background: #ddd;
    height: 20px;
    width: 300px;
    border-radius: 20px;
}

.progress-done3 {
font-family: Verdana, Geneva, Tahoma, sans-serif;    font-weight: bolder;
    color: palevioletred;
    height: 100%;
    background: linear-gradient(to left,rgb(25, 2, 140),rgb(20, 199, 20));
    border-radius: 20px;
    display: grid;
    place-items: center;
    width: 0;
    box-shadow: 0 0 3px -5px rgb(253, 2, 140), 0px 3px 150px rgb(253, 2, 140);
    transition: width .5s ease;
}
.progress4 {
    position: relative;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -60%);
    background: #ddd;
    height: 20px;
    width: 300px;
    border-radius: 20px;
}

.progress-done4 {
font-family: Verdana, Geneva, Tahoma, sans-serif;    font-weight: bolder;
    color: yellow;
    height: 100%;
    background: linear-gradient(to left,rgb(25, 200, 140),rgb(24, 199, 23));
    border-radius: 20px;
    display: grid;
    place-items: center;
    width: 0;
    box-shadow: 0 0 3px -5px rgb(253, 2, 140), 0px 3px 150px rgb(253, 2, 140);
    transition: width .5s ease;
}
.progress5 {
    position: relative;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -60%);
    background: #ddd;
    height: 20px;
    width: 300px;
    border-radius: 20px;
}
.progress-done5 {
font-family: Verdana, Geneva, Tahoma, sans-serif;    font-weight: bolder;
    color: #fff;
    height: 100%;
    background: linear-gradient(to left,rgb(253, 2, 140),rgb(240, 199, 230));
    border-radius: 20px;
    display: grid;
    place-items: center;
    width: 0;
    box-shadow: 0 0 3px -5px rgb(253, 2, 140), 0px 3px 150px rgb(253, 2, 140);
    transition: width .5s ease;
}


    </style>
<?php
    include_once('header.php');
?>
</head>
<body>
    <div class="container-fluid bg-light">
        <h1 class="text-center mt-2">LEARNING SKILLS</h1>
        <hr>
        <div class="row justify-content-evenly text-center">
            <div class="col-md-4">
                <h3>MY SKILLS</h3>
                <p>I believe in the fact that learning never stops and I am interested in learning new technologies and 
                  programming languages that will help me design and develop a better output in less time.
            </p>
            </div>
            <div class="col-md-4">
                <h3>SKILLS</h3>
                <div class="progress">
                    <h6 class="text-start">HTML</h6>
                <div class="progress-done" data-done="95">
                </div> 
                </div><br>
                <div class="progress">
                    <h6 class="text-start">CSS</h6>   
                <div class="progress-done1" data-done="60">
                </div> 
                </div> <br>
                <div class="progress">
                    <h6 class="text-start">JAVASCRIPT</h6>   
                    <div class="progress-done2" data-done="55">
                </div> 
                </div> <br>
                <div class="progress">
                    <h6 class="text-start">PHP</h6>   
                <div class="progress-done3" data-done="80">
                </div> 
                </div> <br> 
                <div class="progress">
                    <h6 class="text-start">BOOTSTRAP</h6>   
                <div class="progress-done4" data-done="90">
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
<script>
    
//set variable
var counter = 0;

//function
window.addEventListener("DOMContentLoaded",move=() =>{
  //global condition (increment j by 1)
  if (counter == 0) {
    J = 1;
    //select element
    var elem = document.querySelector(".progress-done");
    //set prefered width for element
    var width = 0 ;
    //for width 
    var  main  = setInterval(frame,50);
     //function for width 
    function frame() {
      //our width should be :70 + "%"
      if (width >= 95) {
        //clear
        clearInterval(main);
      } else {
        //increment width
        width++;
        //assign percentages to our width as a unit
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
});

var counter = 0;
//function
window.addEventListener("DOMContentLoaded",move=() =>{
  //global condition (increment j by 1)
  if (counter == 0) {
    J = 1;
    //select element
    var elem = document.querySelector(".progress-done1");
    //set prefered width for element
    var width = 20 ;
    //for width 
    var  main  = setInterval(frame,50);
     //function for width 
    function frame() {
      //our width should be :70 + "%"
      if (width >= 80) {
        //clear
        clearInterval(main);
      } else {
        //increment width
        width++;
        //assign percentages to our width as a unit
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
});

var counter = 0;
//function
window.addEventListener("DOMContentLoaded",move=() =>{
  //global condition (increment j by 1)
  if (counter == 0) {
    J = 1;
    //select element
    var elem = document.querySelector(".progress-done2");
    //set prefered width for element
    var width = 20 ;
    //for width 
    var  main  = setInterval(frame,50);
     //function for width 
    function frame() {
      //our width should be :70 + "%"
      if (width >= 55) {
        //clear
        clearInterval(main);
      } else {
        //increment width
        width++;
        //assign percentages to our width as a unit
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
});
var counter = 0;
//function
window.addEventListener("DOMContentLoaded",move=() =>{
  //global condition (increment j by 1)
  if (counter == 0) {
    J = 1;
    //select element
    var elem = document.querySelector(".progress-done3");
    //set prefered width for element
    var width = 20 ;
    //for width 
    var  main  = setInterval(frame,50);
     //function for width 
    function frame() {
      //our width should be :70 + "%"
      if (width >= 80) {
        //clear
        clearInterval(main);
      } else {
        //increment width
        width++;
        //assign percentages to our width as a unit
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
});

var counter = 0;
//function
window.addEventListener("DOMContentLoaded",move=() =>{
  //global condition (increment j by 1)
  if (counter == 0) {
    J = 1;
    //select element
    var elem = document.querySelector(".progress-done4");
    //set prefered width for element
    var width = 20 ;
    //for width 
    var  main  = setInterval(frame,50);
     //function for width 
    function frame() {
      //our width should be :70 + "%"
      if (width >= 90) {
        //clear
        clearInterval(main);
      } else {
        //increment width
        width++;
        //assign percentages to our width as a unit
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
});

</script>
</html>