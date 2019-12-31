<?php
include "koneksi.php";
session_start();//session starts here

?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.css"> 
    <!-- <link rel=”stylesheet” href="assets\css\bootstrap.min.css"> -->
    <script src="bootstrap/js/jquery.js"></script> 
    <script src="bootstrap/js/popper.js"></script> 
    <script src="bootstrap/js/bootstrap.js"></script>

    <title>Login</title>

<style>

/*.panel-login{
    margin-left: 75%;
    margin-top: 200px;
}*/

body, html{
    height: 100%;
    margin: 0;
    
}

.bg {
  /* The image used */
  background-image: url("bootstrap/image/2.jpeg");

  /* Full height */
  height: 100%; 
  margin: 0%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
</head>
<body >
        <div class="bg">
        <div class="container">
            <!-- <div class="float-right"> -->
            <div class="row">
                <div class="col-md-4 offset-md-8" style="margin-top: 220px">
                    <div class="login-panel panel panel-success" float-right >
                        <div class="panel-heading" >

                            <h3 class="panel-title">Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="login.php">
                                <fieldset>
                                    <div class="form-group"  >
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                    </div>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                                </fieldset>
                            </form>
                        </div>
                        <div>
                            <a href="admin_login.php">Admin</a> | 
                            <a href="registration.php">Registrasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
</body>
</html>