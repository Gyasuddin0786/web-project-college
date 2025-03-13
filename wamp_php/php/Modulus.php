<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modulus</title>
</head>
<body>
<form action="Modulus.php" method="post">
Enter n1:<input type="number" name="n1"><br>
Enter n2:<input type="number" name="n2"><br><br>
<input type="submit" value="Reminder" name="btn">

</form>
    <?php
    if(isset($_POST['btn'])){
        $no1=$_POST['n1'];
        $no2=$_POST['n2'];
        $div = (int)($no1/$no2);
        $ans = $no1- ($div*$no2);
        echo "Reminder is:".$ans;
    }
    ?>
</body>
</html>