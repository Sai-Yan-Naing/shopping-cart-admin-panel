
<html>
<head>
<title>AAA</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.bundle.js"></script>
<style>
body {
    background-color: grey
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
<body>
     <div class="padding container d-flex justify-content-center">
     <div class="col-md-10 col-md-offset-1">
        <form action="login.php" method="post" class="signup-form">
            <h2 class="text-center">SIGNUP NOW</h2>
            <hr>
            <div class="form-group mb-3">
             <input type="email" class="form-control" name="email" placeholder="Email Address" required="required"> 
            </div>
            <div class="form-group mb-5">
             <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
           </div>
           <div class="form-group text-center"> 
            	<button type="submit" class="btn btn-blue btn-block">SIGNUP</button>
           </div>
        </form>
     </div>
   </div>
</body>
</html>