<?php 
include 'koneksi.php';
session_start();
$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Donatur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form Data Donatur</h2>
  <form method="post" action="DonaturProses.php">

   <?php  
   include 'koneksi.php';                 
   $id = $_GET['id'];
   $data = mysqli_query($koneksi, "select * from tb_donasi where id='$id'");
   while ($d = mysqli_fetch_array($data)) {
  ?>

  <!-- <fieldset disabled> -->
    <div class="form-group">
        <label for="nama">Id Donasi:</label>
        <input type="text" class="form-control" value="<?php echo $d['id']; ?>" name="id">
      </div>
    </fieldset>
  <?php } ?>

  <fieldset disabled>
    <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" class="form-control" value="<?php echo $_SESSION["username"]; ?>" disable name="nama">
    </div>
  </fieldset>

  <div class="form-group">
    <label for="nama">Jumlah Donasi :</label>
    <input type="text" class="form-control" placeholder="Masukan jumlah donasi" name="jumlah_donasi">
  </div>


  <button type="submit"onclick="return confirm('Simpan Data?');">Simpan</button>
  <button type="button" onclick="window.location.href='donasi.php';">Batal</button>
</form>

</div>

</body>
</html>
