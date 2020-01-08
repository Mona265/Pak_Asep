<?php 
// koneksi ke database
include 'koneksi.php';
session_start();
$username = $_SESSION['user'];
$jumlah_donasi = $_POST['jumlah_donasi'];

mysqli_query ($koneksi,"insert into tb_donatur(nama,jumlah_donasi, ) values ('$username','$jumlah_donasi')");
mysqli_query ($koneksi,"insert into tb_donasi($dana_terkumpul) values ('$jumlah_donasi')");

header("location:donasi.php");

 ?> 