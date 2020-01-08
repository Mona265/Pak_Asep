<?php
include 'koneksi.php';
session_start();
$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Donasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Tambah Data Donasi</h2>
  <form method="post" action="insertdonasi.php">

    <fieldset disabled>
      <div class="form-group">
        <label for="nama">Nama :</label>
        <input type="text" class="form-control" value="<?php echo $_SESSION["username"]; ?>" disable name="nama">
      </div>
    </fieldset>

     <div class="form-group">
      <label for="nama">Nama Penerima Donasi :</label>
      <input type="text" class="form-control" placeholder="contoh : Panti Asuhan Barokah" name="penerima_donasi">
    </div>

     <div class="form-group">
      <label for="nama">Jumlah Dana Yang Dibutuhkan :</label>
      <input type="text" class="form-control" placeholder="contoh : 1000000 " name="total_dana">
    </div>


    
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
  </div>

   <fieldset disabled>
      <div class="form-group">
        <label for="nama">Dana Terkumpul :</label>
        <input type="text" class="form-control" disable name="dana_terkumpul">
      </div>
    </fieldset>

  <button type="submit"onclick="return confirm('Simpan Data?');">Tambah</button>
  <form action="tampildata.php">
    <button type="submit" onclick="return confirm('Yakin batal?');">Batal</button>
  </form> 
</form>

</div>

</body>
</html>
