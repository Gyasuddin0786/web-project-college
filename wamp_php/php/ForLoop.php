<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h1>For Loop in php</h1>
    <?php
    // for($i=2;$i<=10;$i++){


    //     if($i%2==0){
    //         echo $i."<br>";
    //     }
    // }
    //Reverse for loop in php
    // for($i=10;$i>0;$i=$i-2){
    //     echo ($i)."<br>";
    // }
    // $sum=0;
    // for($i=1;;$i++){
    //     $sum= $sum+$i;
    //     if($sum==10){
    //         break;
    //     }
    // }
    
    for($i=1;$i<=5;$i++){
        for($j=$i;$j<=5;$j++){
            // echo $i;
            echo "*";
            echo $j;
        }
        echo "<br>";
    }
    // echo $sum;
    ?>
    
</body>
</html>