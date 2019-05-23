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
<form action="cari.php" method="get">
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
</body>
</html>