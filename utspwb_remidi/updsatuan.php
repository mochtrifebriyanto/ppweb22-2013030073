<?php
include "koneksi.php"


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE Data tabel satuan</title>
</head>
<body>
	<?php
	include 'menu.php';
	$id = $_GET['id_satuan'];
	$data = mysqli_query($conn,"select * from satuan where id='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
	<a href="updsatuan.php?id_satuan=<?php echo $id?>">Update Data Satuan</a> | 
	<a href="satuan.php">Lihat Data</a>
	<br>
	<br>
	<br>
	<form action="proses.php" method="post">
		<input type="text" name="nama" placeholder="nama" value="<?php echo $d['nama']; ?>" readonly><br><br>
		<textarea placeholder="keterangan" name="keterangan"><?php echo $d['keterangan']; ?></textarea><br><br>
		<!-- <input type="varchar" name="aktif" placeholder="aktif"><br><br> -->

		<select name="status">
			<option value="1">aktif</option>
			<option value="0">tidak aktif</option>
		</select><br><br>
			
		<input type="submit" name="upd_satuan" value="Update">
</form>
<?php
	}
?>
</body>
</html>