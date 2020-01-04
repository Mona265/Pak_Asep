<?php
include'koneksi.php'; 

$username = $_POST['username'];
$pass = $_POST['pass'];

$query= "SELECT * FROM tb_admin WHERE username='$username' AND pass='$pass' ";
$hasil = mysqli_query($koneksi, $query);

header("location:donasi.php");
?>