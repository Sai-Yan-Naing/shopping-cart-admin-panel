<?php
 include("confs/config.php");
 $id = $_POST['id'];
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $phone = $_POST['phone'];
 $email= $_POST['email'];
 $password = $_POST['password'];
 $confirmedpass = $_POST['confirmedpass'];
 $sql = "UPDATE signuptable SET name='$name', gender='$gender',phone='$phone',email='$email',password='$password',confirmed_pass='$confirmedpass' WHERE id = $id";
 
 mysqli_query($conn, $sql);
 header("location: user.php");
?>
