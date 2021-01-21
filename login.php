<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if($email == "admin@gmail.com" and $password == "adminadmin") {
$_SESSION['auth'] = true;
header("location: dashboard.php");
} else {
header("location: index.php");
}
?>