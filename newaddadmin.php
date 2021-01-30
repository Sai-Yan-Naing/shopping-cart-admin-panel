<?php
 include("confs/config.php");
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $gender = $_POST['gender'];
 $password = $_POST['password'];
 $confirmedpass = $_POST['confirmedpass'];
 $sql = "INSERT INTO admintable (name, email, phone,
 gender,password,confirmed_pass,created_date) VALUES ('$name', '$email','$phone','$gender','$password','$confirmedpass',
 now())";
 mysqli_query($conn, $sql);
 header("location: adminlist.php");
?> 