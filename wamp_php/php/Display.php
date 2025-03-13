<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display the Details</title>
    <script src="jquery-3.7.1.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" 
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>
<body>
    <h2>Display the Registration Details</h2>
    <?php
    if(isset($_REQUEST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $enrollment = $_POST['enrollment'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
        $mobileno = $_POST['mobileno'];
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $hobb = $_REQUEST['hobb'];

        echo "firstname:".$firstname."<br>";
        echo "lastname:".$lastname."<br>";
        echo "enrollment:".$enrollment."<br>";
        echo "email:".$Email."<br>";
        echo "password:".$password."<br>";
        echo "mobileno:".$mobileno."<br>";
        echo "dob:".$dob."<br>";
        echo "course:".$course."<br>";
        echo "semester:".$semester."<br>";
        echo "gender:".$gender."<br>";
        echo "address:".$address."<br>";
        foreach($hobb as $h){

            echo $h.",";
        }
    }
    else{
        echo "No data found";
    }

?>

</body>
</html>