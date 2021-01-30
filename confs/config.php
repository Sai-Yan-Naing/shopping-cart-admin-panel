<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn, $dbname);
?>