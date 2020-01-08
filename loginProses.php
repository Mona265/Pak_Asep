<?php
include'koneksi.php';
session_start(); 

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$pass = $_POST['pass'];

	if (empty($username)){
		echo "<script>alert('email belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	} else if (empty($pass)){
		echo "<script>alert('Password belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	}

	if ($_SESSION["Captcha"]!=$_POST ["nilaiCaptcha"]) {
		echo "<script>alert('Kode captcha salah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	} else {
		if (!empty($username) && !empty($pass)){	
			$login = mysqli_query($koneksi, "SELECT * FROM tb_registrasi WHERE username='$username' AND pass='$pass'");

			$result = mysqli_num_rows($login);

			if ($result > 0){
				$_SESSION['username'] = $username;
				$_SESSION['pass'] = $pass;

				$row = mysqli_fetch_array($login);

				$_SESSION['user'] = $row['username'];
			
				echo "<script>window.location.assign(\"donasi.php\");</script>";			
			}else{
				echo "<script>alert('Username atau Password salah')</script>";
				echo "<meta http-equiv='refresh' content='1 url=Login.php'>";
			}
		}
	}

}	


?>


<!-- awal -->
<!-- $username = $_POST['username'];
 $pass = $_POST['pass'];

 $_SESSION["username"] = $username;
 $_SESSION["pass"] = $pass;

 $query= "SELECT * FROM tb_registrasi WHERE username='$username' AND pass='$pass' ";
 $hasil = mysqli_query($koneksi, $query);


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
 

  header("location:donasi.php");
  -->