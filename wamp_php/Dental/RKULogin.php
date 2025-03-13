<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKU</title>
    <script src="jquery-3.7.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        .image{
            width: 15rem;
            height: 8rem;
            margin-top: 30rem 0rem 0rem 0rem;
            background: none;
        }

        .container .row{
            margin-top:6rem;
            /* padding-bottom: 160px; */
            text-align: center;
            font-size: 1.4rem;
            margin-bottom: 10rem;
        }
        .input{
            border-radius: 6px;
            width: 25rem;
            border-color: red;
        }
        .container{
            width: 35rem;
            /* background-color: wheat; */
            background-color: whitesmoke;
            height: 520px;
            border-radius: 8px;
            margin-top: 5rem;
            margin-bottom: 1rem;
        }
        #label{
            margin-right: 19rem;
            color: black;
        }
        #flexCheckDefault{
            margin-left:2.1rem;
            padding: .3rem;
            border-color: black;
            margin-top: 1rem;

        }
        #sign{
            margin-right: 20rem;
            padding: .1rem;
            margin-top: .7rem;
            font-size: 1.2rem;
        }
        .forgot{
            margin-right: 17.4rem;
            font-size: 15px;
            /* color: lightslategrey; */
            color: black;
            padding-bottom: 10rem;
            width: -10px;
        }
        #btns{
            margin-left: 17.5rem;
            width: 7rem;
            border-radius: 6px;
            border-color: aqua;
            margin-bottom: 20px;
            background-color: dimgrey;
            color: white;
        }
        .canvas{
            font-size: 17px;
            box-sizing: border-box;
            /* color: lightslategrey; */
            color: black;
            gap: 2rem;
        }
        .error{
            font-size: 20px;
            color: red;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#form").submit(function(e){
                e.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();
                $(".error").remove();
                if(email.length < 3){
                    $("#email").after('<span class="error"><br>must be include at-least 1 spacial character.</span>');

                }
                if(password.length < 8){
                    $("#password").after('<span class="error"><br>must be at-least 8 digits.</span>');

                }

            });
        });
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top sticky-elivent">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#dropdown" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </div>
  </div>
</nav>
<form id="form" action="" method="post">
            <div class="container">
                <div class="row">
            <div class="col-ms-6">
            <div>
                <img src="rku.png" alt="image not found" class="image" style="margin-top: 40px;">
            </div>
        <div>
            <label id="label">Username</label>
            <div>
                <input type="email"  class="input" id="email" maxlength="50">
            </div>
            <div>
                </div>
                <label id="label">Password</label>
                <div>
                    <input type="password"  class="input" id="password" maxlength="8">
                </div>
                <div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="flexCheckDefault">
                <label class="form-check-label" id="sign">Stay signed in</label>
            </div>
            <div class="justify-content-between align-item-center" id="cont">
                <div>
                <button type="submit" class="btn btn-light" id="btns" id="submit">Log in</button>
                </div>
                <a href="#" class="forgot">Forgot Password?</a>
                <!-- <div>
                <button type="button" class="btn btn-secondary" id="btn">Log in</button>
            </div> -->
            </div>
            <div>
            <div>
                <a href="#" class="canvas">RK University Management System(RKU LMS 2024).</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</form>
</body>
</html>
