<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
    <title>Registration</title>
</head>
<style>
    /*.login-panel {
        margin-top: 150px;*/
body, html{
    width: 100%;
    height: 100%;
    margin: 0;
    
}

.bg {
  /* The image used */
  background-image: url("bootstrap-4.4.1-dist/image/2.jpeg");


  /* Full height */
  height: 100%; 
  margin: -1%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<body>
<div class="bg">
    <div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8" style="margin-top: 220px">
            <div class="login-panel panel panel-success" >
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
