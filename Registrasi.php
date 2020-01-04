<?php
// session_start();//session starts here
include 'koneksi.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Registrasi </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="bootstrap/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/util.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <form method="post" action="RegistrasiProses.php">
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-59">
                        Sign Up
                    </span>
            
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Full Name</span>
                        <input class="input100" type="text"  placeholder="Name..." name="nama">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text"  placeholder="Email addess..." name="email" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text"  placeholder="Username..." name="username">
                        <span class="focus-input100"></span> 
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="text"  placeholder="*************" name="pass">
                        <span class="focus-input100"></span>
                    </div>

                   

                    

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    I agree to the
                                    <a href="#" class="txt2 hov1">
                                        Terms of User
                                    </a>
                                </span>
                            </label>
                        </div>                        
                    </div>

                    

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>

                            <button class="login100-form-btn">
                            Sign Up
                            </button>
                        </div>

                        <a href="Login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Sign in
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>

                    <div class="container-login100-form-btn p-t-50">
                        <a href="index.php" class="badge badge-warning">Kembali</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="bootstrap/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap/vendor/bootstrap/js/popper.js"></script>
    <script src="bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap/vendor/daterangepicker/moment.min.js"></script>
    <script src="bootstrap/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="bootstrap/js/main.js"></script>

</body>
</html>