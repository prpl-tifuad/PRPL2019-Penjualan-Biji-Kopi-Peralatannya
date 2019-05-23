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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                    name="cari">
                    <button class="btn btn-info my-2 my-sm-0" type="submit"  >Search</button>
                  </form>
                  <?php 
                    include 'koneksi.php';
                    if(isset($_GET['cari'])){
                    	$cari = $_GET['cari'];
                    	$data = mysqli_query($dbconnect, "select * from barang where nama_barang like '%".$cari."%'");				
                    }else{
                    	$data = mysqli_query($dbconnect, "select * FROM barang");		
                    }
                  ?>
          </div>
        </nav>
<!--Akhir Nav Bar-->
<main role="main">
    <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner" style="margin-bottom:20px">
      <div class="carousel-item active">
        <img src="bg.jpg" alt="Gambar - 1" class="img-fluid" alt="Responsive image" width="6000" height="4000">
        <div class="carousel-caption">
          <h3>Selamat Berbelanja</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="bg3.jpg" alt="Gambar - 2" class="img-fluid" alt="Responsive image" width="6000" height="4000">
        <div class="carousel-caption">
          <h3>Di Website</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="bg2.jpg" alt="Gambar - 3" class="img-fluid" alt="Responsive image" width="6000" height="4000">
        <div class="carousel-caption">
          <h3>Otentik Kopi</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <!-- Produk -->
<div class="container">
    <div class="row">
      <div class="col-md-4">
         <?php
            while($d = mysqli_fetch_array($data)){
        ?>
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="<?= $d['gambar']  ?>" alt="Card image cap" width="70" height="250">
          <div class="card-body">
           <?php echo $d['nama_barang']; ?>
                </p>
                <p align="right">
                  <label>Rp. <?php echo $d['harga']; ?>
                </label>
                </p>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group text-center">
                <button type="button" class="btn btn-warning btn-center">Beli</button>
              </div>
              <small class="text-muted">
                 <?php echo $d['stock']; ?>
              Items
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
 <!--Akhir Produk-->  
      <?php } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>