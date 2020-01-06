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
  <form method="post" action="insertdonasi.php">

  <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" class="form-control" placeholder="Masukan nama" name="nama">
    </div>

     <div class="form-group">
      <label for="nama">Jumlah Donasi :</label>
      <input type="text" class="form-control" placeholder="Masukan jumlah donasi" name="jumlah_donasi">
    </div>


  <button type="submit"onclick="return confirm('Simpan Data?');">Simpan</button>
  <form action="DonaturProses.php">
    <button type="submit" onclick="return confirm('Yakin batal?');">Batal</button>
  </form> 
</form>

</div>

</body>
</html>
