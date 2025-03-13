<!DOCTYPE html>
<html>
<head>
    <title>Student Registation Form</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <style type="text/css">
    a{text-decoration: none;}
        body {
            font-family: Arial, sans-serif;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        /* h2 {
            margin-top: 30px;
            text-align: center;
        } */
        fieldset {
            width: 50%;
            margin: auto;
            border: 2px solid #007bff;
            padding: 20px;
            border-radius: 10px;
        }
        legend {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
        }
        table {
            width: 70%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 4px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    </style>
</head>
<body>
<center>
<h1 align="center">Student Registartion</h1>
<fieldset style="width:30%;margin: auto;">
    <legend>Student Registration</legend>
    <form  action="insert.php" name="form" method="POST">
        <table cellpadding="5px" cellspacing="5px" align="center" border="1">
            <tr>
                <h1>Personal Information</h1>
            </tr>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id" placeholder="Enter ID" required></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>:</td>
                <td><input type="text" name="fname" placeholder="Enter your First Name" required></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>:</td>
                <td><input type="text" name="lname" placeholder="Enter your Last Name" required></td>
            </tr>
            <tr>
                <td>Birth Date</td>
                <td>:</td>
                <td><input type="date" name="bdate" placeholder="Enter your Birth Date" required></td>
            </tr>
            <tr>
            <td colspan="3" align="center">
            <input type="Submit" value="Submit" name="submit"/>
            </td>
        </tr>
</table>
</form>
</fieldset>
<br>
<h2>List of Student Information</h2>
<?php
include_once 'config.php';
$sqlselect = "SELECT id, fname, lname, bdate FROM boy";
$result = $con->query($sqlselect);
echo "<table border='1'><tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>YEAR OF BIRTH</th><th>UPDATE RECORD</th>
<th>DELETE RECORD</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {
         echo "<tr>";
         echo "<td align='center'>" . $row['id'] . "</td>";
         echo "<td align='center'>" . $row['fname'] . "</td>";
         echo "<td align='center'>" . $row['lname'] . "</td>";
         echo "<td align='center'>" . $row['bdate'] . "</td>";
         echo "<td align='center'><a href=\"update.php ? id=".$row['id'] ."\"><input type='submit' value='UPDATE' name='update'></a></td>";
         echo "<td align='center'><a href=\"delete_rec.php ? id=".$row['id']."\"><input type='submit' value='DELETE' name='delete'></a></td>";
         echo "</tr>";
     }
?>
</center>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>