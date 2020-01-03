
<?php 
// koneksi ke database
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];


mysqli_query ($koneksi,"update tb_donasi set nama = '$nama', kategori = '$kategori', deskripsi = '$deskripsi'");

header("location:donasi.php");

 ?> 