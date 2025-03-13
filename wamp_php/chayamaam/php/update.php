<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<body>
<?php
    include_once('config.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id']; // Assuming ID is passed through the URL

        $sqlselect = "SELECT * FROM boy WHERE id = '$id'";
        
        $result = $con->query($sqlselect);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if(isset($row['id'])) {
?>
    <h1 style="margin-left:600px;">Update Student Details</h1>
    <fieldset style="width: 30%;margin:auto;">
    <legend>Student Registration</legend>
    <form action="index.php" name="form" method="post">
        <table cellpadding="5px;" cellspacing="3px;" align="center">
            <tr>
                <th colspan="3"><h2>Student Details</h2></th>
            </tr>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id" placeholder="Enter Id" value="<?php echo $row['id']; ?>"></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>:</td>
                <td><input type="text" name="fname" placeholder="Enter First name" value="<?php echo $row['fname']; ?>"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>:</td>
                <td><input type="text" name="lname" placeholder="Enter Last name" value="<?php echo $row['lname']; ?>"></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td><input type="date" name="bdate" placeholder="Enter Date of Birth" value="<?php echo $row['bdate']; ?>"></td>
            </tr>
        </table> 
        <button type="submit" class="btn btn-outline-success btn-primary col-lg-12 col-md-8">Update</button>    
    </form>
    </fieldset>
<?php
            } else {
                echo "ID not found in the database.";
            }
        } else {
            echo "No records found with the given ID.";
        }
    } else {
        echo "ID parameter is missing in the URL.";
    }
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
