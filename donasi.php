<?php

include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Kamubisa.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">Kamubisa.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
       <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
                <li class="nav-item"><a class="nav-link" href="tambahdonasi.php">Tambah</a></li> 
            </div>
    </div>
  </nav>
  
  <div class="container" style="margin-top:20px">
    <h2>Daftar Donasi</h2>
    
    <hr>
    
    <table class="table table-striped table-hover table-sm table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col" width="20">No</th>
          <th scope="col" width="20">Nama</th>
          <th scope="col" width="20">Kategori</th>
          <th scope="col" width="20">Deskripsi</th>
          <th scope="col" width="10"></th>
        </tr>
      </thead>

      <tbody>
       
<?php
    include 'koneksi.php';
    $nomer = 1;
    $data = mysqli_query($koneksi,"select * from tb_donasi");
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $nomer++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['kategori']; ?></td>
            <td><?php echo $d['deskripsi']; ?></td>
            
            <td>
                <a href="editdonasi.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="delete.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Hapus Data?');">HAPUS</a>
            </td>
        </tr>
        <?php
    }
      ?>

      <tbody>
    </table>
    
  </div>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>
</html>