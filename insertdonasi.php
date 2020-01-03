
<?php 
// koneksi ke database
include 'koneksi.php';

$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];


mysqli_query ($koneksi,"insert into tb_donasi(nama,kategori,deskripsi) values ('$nama','$kategori','$deskripsi')");

header("location:donasi.php");

 ?> 