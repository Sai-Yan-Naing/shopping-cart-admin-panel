<?php
 include("confs/config.php");
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $confirmedpass = $_POST['confirmedpass'];
 $sql = "INSERT INTO signuptable (name, gender, phone,
 email,password,confirmed_pass) VALUES ('$name', '$gender','$phone','$email','$password','$confirmedpass' )";
 mysqli_query($conn, $sql);
 header("location: user.php");
?> 