<!-- developed by frederick Ennnin

date: 19th April,2019.
 -->
<?php
session_start();
include 'core.php';
include "db.php";
 
if (isset($_SESSION['id'])) {
    echo '<script>window.location.href="home.php"</script>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login |Admin</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/users/login-1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/mess.css">

    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="login">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>

    <form class="form-login" action="" method="" id="logfrm">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/log2.png" class="theme-logo" width="100px" height="100px">
            </div>

            <div class="col-md-12">
                <label for="inputEmail" class="">Email</label>                
                <input type="email" id="inputEmail" class="form-control mb-4" placeholder="Email" name="email" required >                
                <label for="inputPassword" class="">Password</label>                
                <input type="password" id="inputPassword" class="form-control mb-5" placeholder="Password" name="password" required>                
                <div class="checkbox d-flex justify-content-between mb-4 mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember</label>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>  
                <div id="respo">
                    <!-- <div id="mess"><p>Voucher generated and saved successfully</p></div> -->
                                    
                 </div>              
                <button class="btn btn-lg btn-gradient-danger btn-block btn-rounded mb-4 mt-5" type="submit" name="btnlog">Login</button>
            </div>

            
        </div>
    </form>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="ajax_gen.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>