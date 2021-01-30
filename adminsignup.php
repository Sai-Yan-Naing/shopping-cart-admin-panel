<html>
<head>
    <title>Admin Signup</title>
 <meta name="viewport" content="width=device-width,initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.bundle.js"></script>
 <style>
 body {
    background-color: grey;
}

.padding {
    padding: 5rem 
}

.signup-form {
    background-color: #fff;
    padding: 45px;
    border-radius: 10px
}

h2 {
    font-size: 36px;
    letter-spacing: 0.08em
}

.signup-form .form-control {
    font-size: 16px;
    padding: 10px 15px;
    color: #555;
    background-color: #fff;
    border-radius: 3px
}

.signup-form input {
    border: 1px solid #eee;
    height: 50px;
    box-shadow: none 
}

.btn-blue {
    background: #44c5ee;
    padding: 10px 28px;
    border: 2px solid #44c5ee;
    color: #fff;
    border-radius: 50px;
    font-weight: 700;
    letter-spacing: 0.08em;
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
    box-shadow: 0px 0px 60px 0px rgba(68, 197, 238, 0.6);
    outline: none !important
}

.btn-blue:hover,
.btn-blue:focus,
.btn-blue:active {
    background: #fff;
    color: #496174
}
</style>
</head>
<?php
    include("confs/config.php");
    if (isset($_REQUEST['email'])) {
        $username = stripslashes($_REQUEST['name']);
        $username = mysqli_real_escape_string($conn, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $phone   = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($conn, $phone);
        $gender    = stripslashes($_REQUEST['gender']);
        $gender   = mysqli_real_escape_string($conn, $gender);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $cpassword = stripslashes($_REQUEST['confirmedpass']);
        $cpassword = mysqli_real_escape_string($conn, $cpassword);
        $query    = "INSERT into `admintable` (name, email, phone, gender, password,confirmed_pass,created_date)
                     VALUES ('$username','$email','$phone','$gender', '$password','$cpassword',now())";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            header("location: dashboard.php");
        } else {
            echo "<div>
                  <h3>Required fields are missing.</h3><br/>
                  <p>Click here to <a href='adminsignup.php'>Signup</a> again.</p>
                  </div>";
        }
    } else {
?>

<body>
     <div class="padding container d-flex justify-content-center">
     <div class="col-md-10 col-md-offset-1">
        <form action=" " method="post" class="signup-form">
            <h2 class="text-center mb-3">SIGNUP NOW</h2>
            <div class="form-group mb-3">
             <input type="text" class="form-control" name="name" placeholder="Username" required="required"> 
            </div>
            <div class="form-group mb-3">
             <input type="email" class="form-control" name="email" placeholder="Email Address" required="required"> 
            </div>
            <div class="form-group mb-3">
             <input type="text" class="form-control" name="phone" placeholder="Pone Number" required="required"> 
            </div>
            <div class="form-group mb-3">
             <input type="text" class="form-control" name="gender" placeholder="Gender" required="required"> 
            </div>
            <div class="form-group mb-5">
             <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
           </div>
           <div class="form-group mb-5">
             <input type="password" class="form-control" name="confirmedpass" placeholder="Confirmed Password" required="required"> 
           </div>
           <div class="form-group text-center">
                <button type="submit" class="btn btn-blue btn-block">SIGNUP</button>
           </div>
        </form>
     </div>
   </div>
<?php
}
?>
</body>
</html>