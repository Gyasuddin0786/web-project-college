<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>SumOfNum</title>
</head>
<body>
    <?php
    $i= 0;
    $sum = 0;
    while($i<10){
        $i++;
        $sum = $sum+$i;
    } 
    echo ("The Sum of 10 num is:");
    echo(+$sum);

    ?>
    
</body>
</html>