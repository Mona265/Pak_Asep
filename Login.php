<?php
include "koneksi.php";
session_start();//session starts here
?> 

<!-- 
        <?php
            if ($_SESSION["nilaiCaptcha"]!=$_POST ["nilaiCaptcha"]) {
                echo "username anda ".$_POST["username"];echo "<br/>";
                echo "password anda ".$_POST["pass"];echo "<br/>";
                echo "Kode Captcha anda Salah";
                }
            else
                {
                echo "username anda ".$_POST["username"];echo "<br/>";
                echo "password anda ".$_POST["pass"];echo "<br/>";
                echo "Kode Captcha anda Benar";
                }
        ?>



<?php require_once("koneksi.php"); ?>
<script type="text/javascript" language="javascript">
    var http = false;
    if (window.XMLHttpRequest) {
      http = new XMLHttpRequest();
    } 

    else if (window.ActiveXObject) {
      http = new ActiveXObject("Microsoft.XMLHTTP");
    }

    function login() {
      http.responseText;
      http.abort();
      http.onreadystatechange=function() {
        if (http.readyState == 4) {
          document.getElementById('pesan').innerHTML = this.responseText;
        }
      }
      var user=document.getElementById('username').value;
      var pwd = document.getElementById('pass').value;
      http.open("GET", "http://localhost/Pak_Asep/LoginProses.php?u="+username+"&p="+pass, true);
      http.send(null);
    }
  </script>
 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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

    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.css"> 
    <!-- <link rel=”stylesheet” href="assets\css\bootstrap.min.css"> -->
    <script src="bootstrap/js/jquery.js"></script> 
    <script src="bootstrap/js/popper.js"></script> 
    <script src="bootstrap/js/bootstrap.js"></script>

    <title>Login</title>


    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more-login"></div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <div class="p-l-50 p-r-50 p-t-50 p-b-50">
                    
                </div>
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

                     <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <span class="label-input100">Captcha</span>
                        <img src="gambarcaptcha.php" alt="gambar">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <span class="label-input100">Isikan Captcha</span>
                        <input class="input100" type="text" name="nilaiCaptcha" value="" maxlength="6" required>
                        <span class="focus-input100"></span>
                    </div>


                    

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" >
                            <a href="LoginProses.php">Sign In</a> 
                            </button>
                        </div>

                        <a href="Registrasi.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Daftar
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