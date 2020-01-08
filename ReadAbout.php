<!DOCTYPE html>
<html>
<head>
	<title>About</title>

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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">Kamubisa.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
       <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
            </div>
    </div>
  </nav>

	<div class="jumbotron">
	  <h1 class="display-4"> Kamu Bisa !!!</h1>
	  <p class="lead">Kamu Bisa, Sebuah website yang dibuat khusus untuk memberikan bantuan kemanusiaan kepada saudara-saudari kita di Indonesia.</p>
	  <hr class="my-4">
	  <p>Mari berdonasi, ringankan hidup sesama dan buat mereka tersenyum :)</p>
	</div>


	<div class="container">
		<div class="row">
		    <div class="col-lg">
		      <center>Nadia Ela Sakina</center> <br>
		      <center><img src="9.jpeg" style="width: 200px; height: 200px;"></center>
		    </div>
		    <br><br>
		    <div class="col-lg">
			    <center>Nur Aminah</center> <br>
			    <center><img src="10.jpeg" style="width: 300px; height: 200px;"></center>
		    </div>
		    <br><br>
		    <div class="col-lg">
		    	<center>Ramona Matovani</center> <br>
			    <center><img src="8.jpeg" style="width: 200px; height: 200px;"></center>
    		</div>
    		<br><br>
  		</div>
  		<br><br><br><br>

	</div>


<div>
<footer id="footer" class="footer-1">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">
  
<div class="col-xs-12 col-sm-6 col-md-3">

<?php
		// File json yang akan dibaca (full path file)
		$file = "anggota.json";

		// Mendapatkan file json
		$anggota = file_get_contents($file);

		// Mendecode anggota.json
		$about = json_decode($anggota, true);

		// Membaca data array menggunakan foreach
	?>
				<?php 
					foreach ($about as $d) {
					    
					   ?>
					   <h4> <?php   echo $d['nama']. "<br>";?></h4>
					   <h4> <?php   echo $d['email']. "<br>";?></h4>
					   <h4> <?php   echo $d['no_hp']. "<br>";?></h4>
					   <h4> <?php   echo $d['alamat_kantor']. "<br>";?></h4>
				<?php 	    
					}	
?>


  
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright Company KAMU BISA © 2020. All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>
</div>

</body>
</html>