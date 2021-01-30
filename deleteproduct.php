<?php
 include("confs/config.php");
 $id = $_GET['id'];
 $sql = "DELETE FROM producttable WHERE id = $id";
 mysqli_query($conn, $sql);
 header("location: productlist.php");
?>
