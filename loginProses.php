<?php
require_once("koneksi.php"); 
$username=$_GET['u'];
$password=$_GET["p"];
$query= "SELECT * FROM tb_registrasi WHERE username='$username' AND password='$password' ";
$hasil = mysqli_query($koneksi, $query);

if (mysqli_num_rows($hasil) > 0){
	echo "<b>Akses diterima</b>";
} else {
	echo "<b>Akses diTolak!</b>";
}
 
?>