<?php
require_once("koneksi.php");
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $no_id = $_POST['no_id'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // query insert data ke database dalam tabel pemesan
    $query = "INSERT INTO pemesan (nama, no_id, alamat, no_hp, jenis_kelamin) values('$nama','$no_id', '$alamat', ''$no_hp','$jenis_kelamin')";
    if(mysqli_query($konek, $query)){
        header("Location: tambahpelanggan.php");
    }else{
        echo "Tambah data gagal";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP Sederhana</title>
</head>
<body>
    <h3>Tambah Data Aggota</h3>
    <center>
        <form action="pelanggan.php" method="post">
        Nama            : <input type="text" name="nama"><br><br>
        Nomor Identitas : <textarea name="no_id" rows="3" cols="20"></textarea><br><br>
        Alamat          : <textarea name="alamat" rows="3" cols="20"></textarea><br><br>
        Nomor Handpone  : <textarea name="no_h" rows="3" cols="20"></textarea><br><br>
        Jenis Kelamin   : <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki 
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
    </center>
</body>
</html>