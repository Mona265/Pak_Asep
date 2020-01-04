<?php  

	$koneksi = mysqli_connect('localhost','root','','db_kamubisa') or mysqli_error();

	// check connection
	if (mysqli_connect_errno()) {
		echo "Koneksi database gagal : ".mysqli_connect_error();
	}

?>