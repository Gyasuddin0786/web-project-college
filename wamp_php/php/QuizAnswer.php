<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Your Quiz score is here</h2>
    <?php
    echo "<h2>Your CSS Quiz score is here</h2>";
    // html Answer php code starts here
    if(isset($_POST['btn'])){
        $score = 0;
        if($_POST['Q1']=="B"){
            $score = $score + 1;
        }
        if($_POST['Q2']=="C"){
            $score = $score + 1;
        }
        if($_POST['Q3']=="A"){
            $score=$score + 1;
        }
        if($_POST['Q4']=="A"){
            $score=$score + 1;
        }
        if($_POST['Q5']=="B"){
            $score=$score + 1;
        }
        // html Answer php code ends here


        // css Answer php code statrs here
        if($_POST['Q1']=="c"){
            $score=$score + 1;
        }
        if($_POST['Q2']=="a"){
            $score=$score + 1;
        }
        if($_POST['Q3']=="b"){
            $score=$score + 1;
        }
        if($_POST['Q4']=="b"){
            $score=$score + 1;
        }
        if($_POST['Q5']=="b"){
            $score=$score + 1;
        }
        // css Answer php code ends here
        echo "Your score is:".$score."/5";
    }
    ?>

</body>
</html>