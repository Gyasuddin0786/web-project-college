<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Generate Array Box</title>
</head>
<body>
    <form action="GenerateTextbox.php" method="post">
    <div class="container">
        <div class="box">
            <div>
                <label for="">Enter number how many you want to generate array box?</label>
                <input type="number" name="n1"><br><br>
                <input type="submit" name="submit">
            </div>
        </div>
    </div>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $n1= $_POST['n1'];
    ?>
    <form action="GenerateTextbox.php" method="post">
        <?php
        for($i=1;$i<=$n1;$i++){

        ?>
        <input type="number" name="array[]"><br>
        <?php
    }
        ?>
        <input type="submit" name="test" value="submit">
    </form>
    <?php
    }
    if(isset($_POST['test'])){
        $array = $_POST['array'];
        rsort($array);
        foreach($array as $value){

        }
    }
?>
<?php
    if(isset($_POST['test'])){
        $array = $_POST['array'];
        rsort($array);
        echo "F1 max is:".$array[0]."<br>";
        echo "2nd max is:".$array[1]."<br>";
        echo "3rd max is:".$array[2]."<br>";

    }
?>
</body>
</html>