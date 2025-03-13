<?php
$con = new mysqli("localhost", "root","","student");
//select data from table
$sqlselect = "SELECT id, name,sallary  FROM teacher";
$result = $con->query($sqlselect);
if($result->num_rows > 0){
    //output data of each row
    while( $row = $result->fetch_assoc()){
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]." Sallary:" . $row["sallary"]. "<br> ";
    }
}else{
echo "Not result found!";
}
?>