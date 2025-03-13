<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loop</title>
</head>
<body>
    <h1>Do While Loop in php</h1>
    <h2>Print the odd number by using do while loop</h2>
    <?php
    $i=1;
    do{
        echo ($i);
        echo ("</br>");
        $i = $i + 2;

    }while($i <=0);
    echo $i;

    ?>
</body>
</html>