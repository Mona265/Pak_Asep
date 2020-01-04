<!DOCTYPE html>
<html>
<head>
	<title>Cek hasil captcha</title>
</head>
<body>
<p align="center">Hasil Login</br>
<?php
session_start();
if ($_SESSION["Captcha"]!=$_POST ["nilaiCaptcha"]) {
	echo "Username anda ".$_POST["uname"];echo "<br/>";
	echo "Password anda ".$_POST["psw"];echo "<br/>";
	echo "Kode Captcha anda Salah";
	}
	else
	{
	echo "Username anda ".$_POST["uname"];echo "<br/>";
	echo "Password anda ".$_POST["psw"];echo "<br/>";
	echo "Kode Captcha anda Benar";
	}
?>
</p>
</body>
</html>