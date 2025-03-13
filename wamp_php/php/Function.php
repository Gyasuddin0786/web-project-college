<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local variable Function</title>
</head>
<body>
    <?php
    function myFunction(){
        $a =2;
        $b =4;
        $sum = $a+$b;
        echo "Sum of is:".$sum."<br>";
        echo "It is a local variable function";
       }
       myFunction();
    ?>
</body>
</html>