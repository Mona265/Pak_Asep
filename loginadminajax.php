<?php
include'koneksi.php';
session_start(); 

$username = $_POST['username'];
 $pass = $_POST['pass'];

 $_SESSION["username"] = $username;
 $_SESSION["pass"] = $pass;

 $query= "SELECT * FROM tb_admin WHERE username='$username' AND pass='$pass' ";
 $hasil = mysqli_query($koneksi, $query);
 

  header("location:donasi.php");

 
?>
