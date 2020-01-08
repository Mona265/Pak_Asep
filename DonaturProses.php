<?php 
// koneksi ke database
include 'koneksi.php';

$nama = $_POST['nama'];
$jumlah_donasi = $_POST['jumlah_donasi'];



mysqli_query ($koneksi,"insert into tb_donatur(nama,jumlah_donasi, ) values ('$nama','$jumlah_donasi')");

header("location:donasi.php");

 ?> 

 