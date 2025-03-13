<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number</title>
</head>
<body>
    <div class="container">
        <div class="box">
    </div>
    <?php
    $sum = 0;
    for($n=1; $n<=100;$n++){
        $flag = 0;
        for($i= 1;$i<= $n-1;$i++){
            if($n%$i == 0){
                $flag++;
            }
        }
        if($flag == 1){
            $sum = $sum+$i;
        }
    }
    echo "The sum of is:".$sum;
    ?>
</body>
</html>