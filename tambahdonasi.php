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

  <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" class="form-control" placeholder="Masukan nama" name="nama">
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
      <option>-</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
  </div>

  <button type="submit"onclick="return confirm('Simpan Data?');">Tambah</button>
  <form action="tampildata.php">
    <button type="submit" onclick="return confirm('Yakin batal?');">Batal</button>
  </form> 
</form>

</div>

</body>
</html>
