<?php
 include("confs/config.php");
 $id = $_POST['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone= $_POST['phone'];
 $gender= $_POST['gender'];
 $password= $_POST['password'];
 $confirmedpass= $_POST['confirmedpass'];
 $sql = "UPDATE admintable SET name='$name', email='$email',phone='$phone',gender='$gender',password='$password',confirmed_pass='$confirmedpass' WHERE id = $id";
 
 mysqli_query($conn, $sql);
 header("location: adminlist.php");
?>
