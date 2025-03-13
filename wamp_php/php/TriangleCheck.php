<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Check</title>
</head>
<body>
    <form action="" method="post">
        <div class="box">
            <div>
                num1:<input type="number" name="n1"><br><br>
                num2:<input type="number" name="n2"><br><br>
                num3:<input type="number" name="n3"><br><br>
                <input type="submit" name="submit">&nbsp;&nbsp;&nbsp;
          </div>
        </div>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        if($n1 > $n2 && $n1 > $n3){
            echo "Num1 is max:".$n1."<br>";
        }
        else if($n2 > $n1 && $n2 > $n3){
            echo "Num2 is max:".$n2."<br>";
        }
        elseif ($n3 > $n1 && $n3 > $n2){
            echo "Num3 is max:".$n3."<br>";
        }
        else{
            $a = $n1;
            $b = $n2;
            $c = $n3;
        }
        if($a * $a == $b * $b + $c * $c){
            echo "Triangle is formed.";
        }
        else{
            echo "Triangle is not formed.";
        }
    }
    ?>
</body>
</html>