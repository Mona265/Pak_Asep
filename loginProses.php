<?php
include'koneksi.php'; 

$username = $_POST['username'];
$pass = $_POST['pass'];

$query= "SELECT * FROM tb_registrasi WHERE username='$username' AND pass='$pass' ";
$hasil = mysqli_query($koneksi, $query);

session_start();
if ($_SESSION["Captcha"]!=$_POST ["nilaiCaptcha"]) {
	echo "Username anda ".$_POST["username"];echo "<br/>";
	echo "Password anda ".$_POST["pass"];echo "<br/>";
	echo "Kode Captcha anda Salah";
	}
	else
	{
	echo "Username anda ".$_POST["username"];echo "<br/>";
	echo "Password anda ".$_POST["pass"];echo "<br/>";
	echo "Kode Captcha anda Benar";
	}

 header("location:index.php");
?>
