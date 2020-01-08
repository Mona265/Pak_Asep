<?php
include "koneksi.php";
session_start();//session starts here

?> 

<!DOCTYPE html>
<html>
<head>
<!-- <script type="text/javascript" language="javascript">
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
      var uname=document.getElementById('username').value;
      var pw = document.getElementById('pass').value;
      http.open("GET", "http://localhost/Pak_Asep/loginadminajax.php?u="+uname+"&p="+pw, true);
      http.send(null);
    }
  </script> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin -Kamu Bisa-</title>
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
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-59">
                        Sign In <br>
                        <h4>Admin</h4>
                    </span>

                   
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Username...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" >
                            <a href="loginadminajax.php">Sign In</a> 
                            </button>
                        </div>
                    </div>

                    <div class="container-login100-form-btn p-t-50">
                        <a href="index.php" class="badge badge-warning">Kembali</a>
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