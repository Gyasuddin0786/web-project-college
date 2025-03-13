<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php
    $a = 12;
    $b = 10;
    $op = 'a';
    switch($op){
        case 'a': $sum = $a+$b;
            echo("Sum of is".$sum);
            break;
        case 'b': $sub = $a-$b;
            echo("Sub of is".$sub);
            break;
        case 'c': $mul = $a*$b;
            echo("mul of is".$mul);
            break;
        case 'd': $div = $a/$b;
            echo("div of is".$div);
            break;
        case 'e': $mod = $a%$b;
            echo("mod of is".$mod);
            break;
        default:
            echo("Wrong Input");
            break;


    }
    ?>
    
</body>
</html>