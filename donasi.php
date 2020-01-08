<?php
session_start();

if(!isset($_SESSION['logged_in']))
{
 header("Location: index.php");
}

require_once ('koneksi.php');

$session = $_SESSION['logged_in'];

$query  = "SELECT * FROM tb_admin WHERE id = '$session'";
$result = mysqli_query($koneksi,$query)or die(mysqli_error());
$row     = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Kamubisa.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="bootstrap/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="bootstrap/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/util.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
<!--===============================================================================================-->
  
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
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>  
            </div>
    </div>
  </nav>


  <div class="container" >
  <div class="row" style="margin-top: 20px"></div>
  <div class="col-md-2"></div>
  <div class="col-md-14">
 
    <h2>Daftar Donasi</h2>
 

    
    <table class="table table-striped table-hover table-sm table-bordered">
     <div class="col-md-2"></div>
      <thead class="thead-dark">
        <tr>
          <th scope="col" width="20">No</th>
          <th scope="col" width="20">Nama</th>
          <th scope="col" width="20">Penerima Donasi</th>
          <th scope="col" width="20">Jumlah Dana </th>
          <th scope="col" width="20">Deskripsi</th>
          <th scope="col" width="20">Dana Terkumpul</th>
          <th scope="col" width="10"></th>
        </tr>
      </thead>
      </div>
      <tbody>

  

       
<?php
    include 'koneksi.php';
    $nomer = 1;
    $data = mysqli_query($koneksi,"select * from tb_donasi");
    $coba = mysqli_query($koneksi,"SELECT SUM(jumlah_donasi) FROM tb_donator");
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $nomer++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['penerima_donasi']; ?></td>
            <td><?php echo $d['total_dana']; ?></td>
            <td><?php echo $d['deskripsi']; ?></td>
            <td><?php echo $d['dana_terkumpul']; ?></td>
            
            <td>

                <a href="editdonasi.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="delete.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Hapus Data?');">HAPUS</a>
                <a href="donatur.php?id=<?php echo $d['id']; ?>">Donasi</a>
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