<?php 
// koneksi ke database
include ("koneksi.php");

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];

 $sql = "INSERT INTO tb_registrasi (name, email, username, pass) VALUE ($name', '$email', '$username', '$pass')";
 $query = mysqli_query($koneksi, $sql);

// mysqli_query ($koneksi,"insert into tb_registrasi( name, email, username, pass) values ($name', '$email', '$username', '$pass')");

// header("location:Login.php");

 ?> 