<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a =23;
    $b = 122;
    $c = 123;
    if($a> $b & $a>$c){
        echo ("a is max");
    }
    else if($b> $a & $b>$c){
        echo ("b is max");
    }
    else{
        echo ("c is max");
    }

    ?>
</body>
</html>