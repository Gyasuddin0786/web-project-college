<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <?php
    $con = new mysqli("localhost","root","","student"); 
    //insert the date in table
    $sqlinsert = "INSERT INTO teacher (id,name,sallary) VALUES('24SOECE11109','Sujeet','5000')";
    if($con->query($sqlinsert)===TRUE){
        echo "New record created successfully!";
    }
    else{
        echo "Error".$sql."<br>".$con->error;
    }
    ?>
</body>
</html>