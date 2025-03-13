<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 -->
<?php
    include "connection.php";
    $sql = "SELECT * FROM products";

?>
<table border="3" style="border-collapse: collapse;">
<tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Product Description</th>
    <th>Product Quantity</th>
    <th>Product Price</th>
    <th>Product Image</th>
    <th>Edit product</th>
    <th>Delete product</th>
</tr>
<?php
$result = mysqli_query($conn,$sql);
while ($r = mysqli_fetch_array($result)) { 
    ?>
    <tr>
        <td><?php echo $r[0];?></td>
        <td><?php echo $r[1];?></td>
        <td><?php echo $r[2];?></td>
        <td><?php echo $r[3];?></td>
        <td><?php echo $r[4];?></td>
        <td><img src="uploads/<?php echo $r[5];?>" height="20%" width="20%"/></td>
        <td><a href="edit_product.php?pid=<?php echo $r['id'];?>"><input type="button" value="Edit" style="background-color:green;color:white;width:60px"></a></td>
        <td><a href="delete_product.php?pid=<?php echo $r['id'];?>"><input type="button" value="Delete" style="background-color:red;color:white;width:60px"></a></td>

    </tr>
    <?php
    }
    ?>
</table>
