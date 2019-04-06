<?php
    include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Desain Form Login Dengan Css</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$data = mysqli_query($dbconnect, "select * from kopi where nama_kopi like '%".$cari."%'");				
}else{
	$data = mysqli_query($dbconnect, "SELECT * FROM kopi");		
}
?>
<table border="1" cellspacing ="1" cellspadding="10">
        <tr>
            <th>Kode Kopi</th>
            <th>Nama Kopi</th>
            <th>Stock</th>
        </tr>
<?php
$no = 1;
	while($d = mysqli_fetch_array($data)){
    ?>
    
        <tr>
            <td><?php echo $d['kode_kopi']; ?></td>
            <td><?php echo $d['nama_kopi']; ?></td>
            <td><?php echo $d['stock']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>