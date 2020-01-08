
	
<?php
	//logout
	session_start();
	session_destroy();
 
	// arahkan ke halaman login.php 
	echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
	echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>

