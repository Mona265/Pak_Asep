<?php
require_once("koneksi.php"); 
$username=$_GET['u'];
$pass=$_GET["p"];
$query= "SELECT * FROM tb_admin WHERE username='$username' AND pass='$pass' ";
$hasil = mysqli_query($koneksi, $query);

if (mysqli_num_rows($hasil) > 0){
	  header("location:donasi.php");
} else {
	 echo "Ditolak";
}

?>