<?php
 include("confs/config.php");
 $id = $_GET['id'];
 $sql = "DELETE FROM admintable WHERE id = $id";
 mysqli_query($conn, $sql);
 header("location: adminlist.php");
?>
