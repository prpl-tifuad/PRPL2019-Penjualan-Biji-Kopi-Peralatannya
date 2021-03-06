<?php
    include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- MY CSS-->
   <link rel="stylesheet" href="style.css">

    <title>Otentik Kopi</title>
  </head>
  <body>
          
<!-- Navbar-->
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="coffee.html">Coffee</a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="equipment.html">Equipment</a>
            </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="databarang.php" method="get">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari">
              <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
            </form>
            <?php 
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysqli_query($dbconnect, "select * from barang where nama_barang like '%".$cari."%'");              
            }else{
                $data = mysqli_query($dbconnect, "select * FROM barang");     
            }

            ?>
    </div>
  </nav>
</header>
<!--Akhir Nav Bar-->
<!-- PHP -->

<!-- akhir PHP -->
<div class="container">
  <div class="container">
    
    <div class="row">
      <div class="col-md-4">
        <?php
            while($d = mysqli_fetch_array($data)){
        ?>
        <div class="card mb-4 box-shadow" >
          <img class="card-img-top" src="<?= $d['gambar']  ?>" alt="Card image cap" width="100" height="300">
          <div class="card-body">
            <p class="card-text text-center">
                <?php echo $d['nama_barang']; ?>
                </p>
                <p align="right">
                  <label>Rp. <?php echo $d['harga']; ?>
                </label>
                </p>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group text-center">
                <button type="button" class="btn btn-warning btn-center" href=" ">Beli</button>
              </div>
              <small class="text-muted">
                <?php echo $d['stock']; ?>
              Items 
              </small>
            </div>
          </div>
        </div>
          <?php } ?>
      </div>
<table border="1" cellspacing ="1" cellspadding="10">
    </table>
    </div>
</div>
</body>
</html>