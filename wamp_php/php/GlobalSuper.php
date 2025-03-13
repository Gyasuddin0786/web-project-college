<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a =2 ;
        $b = 1;
        $z = $a + $b;
    function addition(){
        $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    echo "Sum of is:".$z;
    addition();
    ?>
</body>
</html>