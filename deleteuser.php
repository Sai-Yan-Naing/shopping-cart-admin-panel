<?php
 include("confs/config.php");
 $id = $_GET['id'];
 $sql = "DELETE FROM signuptable WHERE id = $id";
 mysqli_query($conn, $sql);
 header("location: user.php");
?>
