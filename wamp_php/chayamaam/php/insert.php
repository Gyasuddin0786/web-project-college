<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    include_once("config.php"); 
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname']; 
        $bdate = $_POST['bdate'];

        $con = new mysqli("localhost", "root", "", "fstudent"); 
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Insert data into the table
        $sqlinsert = "INSERT INTO boy (id, fname, lname, bdate) VALUES ('$id', '$fname', '$lname', '$bdate')";
        if ($con->query($sqlinsert) === TRUE) {
            // echo "New record inserted successfully";
        } else {
            echo "Error: " . $sqlinsert . "<br>" . $con->error;
        }

        $con->close();
    }
    ?>
</body>
</html>
