<?php  
include 'koneksi.php';
session_start();
$_SESSION['id'] = $id;
$sql3 = "SELECT SUM(jumlah_donasi) FROM tb_donator WHERE id = '$id'";


mysqli_query($koneksi, $sql3);
header("location:donasi.php");
?>