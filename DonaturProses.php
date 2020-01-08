<?php 
// koneksi ke database
include 'koneksi.php';
session_start();
$jumlah_donasi = $_POST['jumlah_donasi'];
$id = $_POST['id'];

$_SESSION['id'] = $id;
$username = $_SESSION['user'];

$sql1 = "insert into tb_donatur(id, nama, jumlah_donasi) values ('$id','$username','$jumlah_donasi')";
$sql2 = "update tb_donasi set dana_terkumpul ='$jumlah_donasi' where id = '$id'";


mysqli_query($koneksi, $sql1);
mysqli_query($koneksi, $sql2);


// $q = mysqli_multi_query($koneksi, $query);
// if ($q) {
//   echo "Success";
// }

header("location:prosesSum.php");

 ?> 



