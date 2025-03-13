<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiplication Table</title>
</head>
<body>
    <form action="UserTable.php" method="post">
        <div class="box">
            Enter number:<input type="number" name="num"><br><br>
            <input type="submit" name="btn">
        </div>
    </form>
    <?php
        if(isset($_POST['btn'])){
        $no1=$_POST['num'];
        $n = (int)($no1);
        for($i=1;$i<=10;$i++){
            echo ($n."x".$i."=".$i*$n."<br>");
        }
    }

    ?>
</body>
</html>