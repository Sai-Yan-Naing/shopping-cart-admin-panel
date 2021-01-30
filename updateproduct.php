<?php
 include("confs/config.php");
 $id = $_POST['id'];
 $name = $_POST['name'];
 $quantity = $_POST['quantity'];
 $price = $_POST['price'];
 $detail= $_POST['detail'];
 $image= $_POST['image'];
 $sql = "UPDATE producttable SET name='$name', qty='$quantity', price='$price',detail='$detail',image='$image' WHERE id = $id";
 
 mysqli_query($conn, $sql);
 header("location: productlist.php");
?>
