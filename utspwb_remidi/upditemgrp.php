<?php
include "koneksi.php"


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE Data tabel item</title>
</head>
<body>
	<?php
	include 'menu.php';
	$id = $_GET['grp_id'];
	$data = mysqli_query($conn,"select * from item_grp where id='$id'");
	while($res = mysqli_fetch_array($data)){
	?>
	<a href="upditemgrp.php?grp_id=<?php echo $id?>">Update Data Item</a> | 
	<a href="item_grp.php">Lihat Data</a>
	<br>
	<br>
	<br>
		<form action="proses.php" method="post">
  <input type="text" name="id" value="<?php echo $res['id'];?>" readonly style="display:none;">
   <input type="text" name="nama" placeholder="Nama" value="<?php echo $res['nama'];?>"><br><br>
<input type="number" name="upline" placeholder="Upline" value="<?php echo $res['upline'];?>"><br><br>
   <input type="number" name="level" placeholder="Level" value="<?php echo $res['level'];?>"><br><br>
   <input type="text" name="keterangan" placeholder="Keterangan" value="<?php echo $res['keterangan'];?>"><br><br>
   	Status <select name="status">
			<option value="1">Aktif</option>
			<option value="2">Tidak Aktif</option>
		</select><br><br>
		<input type="submit" name="upditemgrp" value="Update">

	</form>
<?php
	}
?>
</body>
</html>