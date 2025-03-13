<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session1</title>
</head>
<body>
    <h1 style="text-align: center;">Sesstion variable</h1>
    <?php
    session_start();
    if(isset($_SESSION["sname"],$_SESSION["sroll"])){
        unset($_SESSION["sname"]);
        unset($_SESSION["sroll"]);
        echo '<h2>The Name of student is:'.$_SESSION["sname"]."</h2>";
        echo '<h2>The Roll of student is:'.$_SESSION["sroll"]."</h2>";
        echo '<h2>The Enrollment of student is:'.$_SESSION["senrollment"]."</h2>";

    }
    ?>
</body>
</html>