<?php
 include("confs/config.php");
 $name = $_POST['name'];
 $price = $_POST['price'];
 $detail = $_POST['detail'];
 $quantity = $_POST['quantity'];
 $image = $_FILES['image']['image'];
 $sql = "INSERT INTO producttable (name, price, detail,
 qty,image) VALUES ('$name', '$price','$detail','$quantity','$image')";
 mysqli_query($conn, $sql);
 header("location: productlist.php");
?> 