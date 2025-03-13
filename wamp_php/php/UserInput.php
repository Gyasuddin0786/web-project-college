<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserInput Php</title>
</head>
<style>
    h1 {
        color: orange;
        background-color: black;
    }
    label{
        color: blue;
        font-size: 20px;

    }
    input{
        font-size: 15px;
        border-radius: 8px;

    }
    #btn{
        color: black;
        background-color: burlywood;
        border-radius: 15px;
        text-align: center;
        margin-left: 100px;
    }
</style>
<body>
    <center><h1>User Input In Php</h1>
    <form action="" method="">
        <label for="inp">
        First name:<input type="text" name="firstname" id="inp">
        </label><br><br>
        <label for="inp">
        Last name:<input type="text" name="lastname" id="inp">
        <br><br>
        </label>

        <input type="submit" name="submit" value="submit" id="btn"> 
        <br><br>
    </form>
    </center>
    <?php
    echo $_REQUEST['firstname'];
    echo "<br>";
    echo $_REQUEST['lastname'];
    ?>
</body>
</html>