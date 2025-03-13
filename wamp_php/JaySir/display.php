<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<style>
.btn1 {
    border-radius: 4px;
    width: 100px;
    background-color: blue;
    }
.btn1 a{
    text-decoration: none;
    color: white;
}
.btn1:hover{
    background-color: green;
}
.btn2 {
    border-radius: 4px;
    width: 100px;
    background-color: blue;
    }
.btn2 a{
    text-decoration: none;
    color: white;
}
.btn2:hover{
    background-color: red;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> 
      </ul>
      <form action="display.php" method="post" class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <input type="submit" name="searchbtn" value="Search" class="btn btn-outline-success btn-primary text-white me-2">
</form>
</div>
<?php include_once('sesstion.php'); ?>
</div>
</nav>
<center>
        <div class="container-fluid" style="margin-top:7%;">
            <h2 class="mt-5">Student Registration Details</h2>
            <table class="table table-bordered border-info table-hover table table-bordered">
            <tr style="background-color:black;color:yellow;">
                <th>S_Id</th>
                <th>S_Name</th>
                <th>S_Email Address</th>
                <th>S_Password</th>
                <th>S_Gender</th>
                <th>S_Branch</th>
                <th>S_Mob</th>
                <th>S_Photo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
         </div>
   
    <?php
    $con = mysqli_connect("localhost","root","","wp2024");
    $ans = mysqli_query($con,"SELECT * FROM  student");
        if(isset($_POST['searchbtn']))
        {
            $search = $_POST['search'];
            $ans = mysqli_query($con,"SELECT * FROM  student WHERE s_name LIKE '%$search%'");
            while($row = mysqli_fetch_array($ans)){
                ?>
            <tr>
                <td>
                    <?php echo $row['s_id'];?>
                </td>
                <td>
                    <?php echo $row['s_name'];?>
                </td>
                <td>
                    <?php echo $row['s_email'];?>
                </td>
                <td>
                    <?php echo $row['s_password'];?>
                </td>
                <td>
                    <?php echo $row['s_gender'];?>
                </td>
                <td>
                    <?php echo $row['s_branch'];?>
                </td>
                <td>
                    <?php echo $row['s_mob'];?>
                </td>
                <td>
                    <img src="uploads/<?php echo $row['s_photo'];?>" height="100px;" width="100px;">
                </td>
                <td><button type="button" title="Edit this record" class="btn1"><a href="edit.php?id=<?php echo $row['s_id'];?>"
                >Edit</a></button></td>
                <td><button type="button" title="Delete this record" class="btn2"><a href="delete.php?id=<?php echo $row['s_id'];?>"
                             >Delete</a></button></td>
            </tr>
            <?php
            }
        }
        elseif(
            $ans = mysqli_query($con,"SELECT * FROM  student")){
            while($row = mysqli_fetch_array($ans)){
            ?>
            <tr>
                <td>
                    <?php echo $row['s_id'];?>
                </td>
                <td>
                    <?php echo $row['s_name'];?>
                </td>
                <td>
                    <?php echo $row['s_email'];?>
                </td>
                <td>
                    <?php echo $row['s_password'];?>
                </td>
                <td>
                    <?php echo $row['s_gender'];?>
                </td>
                <td>
                    <?php echo $row['s_branch'];?>
                </td>
                <td>
                    <?php echo $row['s_mob'];?>
                </td>
                <td>
                    <img src="uploads/<?php echo $row['s_photo'];?>" height="100px;" width="100px;">
                </td>
                <td><button type="button" title="Edit this record" class="btn1"><a href="edit.php?id=<?php echo $row['s_id'];?>"
                >Edit</a></button></td>
                <td><button type="button" title="Delete this record" class="btn2"><a href="delete.php?id=<?php echo $row['s_id'];?>"
                             >Delete</a></button></td>
            </tr>
            <?php
            }
        }
        else{
            echo "No records found";
        }
        ?>
        </table>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>