
<?php 
// koneksi ke database
include 'koneksi.php';
session_start();
$username = $_SESSION['user'];

$penerima_donasi = $_POST['penerima_donasi'];
$total_dana = $_POST['total_dana'];
$deskripsi = $_POST['deskripsi'];
$dana_terkumpul = $_POST['dana_terkumpul'];


mysqli_query ($koneksi,"insert into tb_donasi(nama,penerima_donasi, total_dana, deskripsi, dana_terkumpul) values ('$username','$penerima_donasi','$total_dana','$deskripsi', '$dana_terkumpul')");

header("location:donasi.php");

 ?> 