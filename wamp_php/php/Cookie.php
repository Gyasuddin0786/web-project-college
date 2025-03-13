<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie in php</title>
</head>
<body>
    <form action="" method="post">
        <h1>This is my cookie php</h1>
    </form>
    <?php
        if(isset($_COOKIE['c1'])){
            echo "Cookie is created with value:".$_COOKIE['c1'];
            // returns cookie value
        }
        else{
            echo "coockie is not set";
        }
    ?>
</body>
</html>