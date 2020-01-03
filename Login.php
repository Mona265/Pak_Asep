<?php
session_start();//session starts here

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="bootstrap-4.4.1-dist/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/util.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more-login"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-59">
                        Sign In
                    </span>

                   
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Username...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="text" name="pass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" >
                            <a href="index.php">Sign In</a> 
                            </button>
                        </div>

                        <a href="Registrasi.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Sign up
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="bootstrap-4.4.1-dist/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap-4.4.1-dist/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap-4.4.1-dist/vendor/bootstrap/js/popper.js"></script>
    <script src="bootstrap-4.4.1-dist/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap-4.4.1-dist/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap-4.4.1-dist/vendor/daterangepicker/moment.min.js"></script>
    <script src="bootstrap-4.4.1-dist/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap-4.4.1-dist/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap-4.4.1-dist/js/main.js"></script>

</body>
</html>