<?php 
// koneksi ke database
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$penerima_donasi = $_POST['penerima_donasi'];
$total_dana = $_POST['total_dana'];
$deskripsi = $_POST['deskripsi'];
$dana_terkumpul = $_POST['dana_terkumpul'];


mysqli_query ($koneksi,"update tb_donasi set nama = '$nama', penerima_donasi = '$penerima_donasi', total_dana = '$total_dana', deskripsi = '$deskripsi', dana_terkumpul = $dana_terkumpul' where id = '$id'");

header("location:donasi.php");

 ?> 