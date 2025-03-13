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
    ?>
    <?php
    $_SESSION["sname"] = "Gyasuddin";
    $_SESSION["sroll"] = "4";
    $_SESSION["senrollment"]="22SOECE11108";
    echo '<h3>The Name of student is:'.$_SESSION['sname']."</h3>";
    echo '<h3>The Roll of student is:'.$_SESSION['sroll']."</h3>";
    echo '<h3>The Enrollment of student is:'.$_SESSION['senrollment']."</h3>";
    echo "<h3>Session variable are set Successfully!.<h3>";
    ?>
</body>
</html>