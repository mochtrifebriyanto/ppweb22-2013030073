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
	$id = $_GET['item_id'];
	$data = mysqli_query($conn,"select * from item where id='$id'");
	while($res = mysqli_fetch_array($data)){
	?>
	<a href="upditem.php?item_id=<?php echo $id?>">Update Data Item</a> | 
	<a href="item.php">Lihat Data</a>
	<br>
	<br>
	<br>
		<form action="proses.php" method="post">
  <input type="text" name="id" value="<?php echo $res['id'];?>" readonly style="display:none;">
  		<input type="number" name="barcode" placeholder="Barcode" value="<?php echo $res['barcode'];?>"><br><br>
   <input type="text" name="nama" placeholder="Nama item" value="<?php echo $res['nama'];?>"><br><br>
 <input type="text" name="nk"value="<?php echo $res['item_grp_id'];?>" readonly> 
  <br><br>
  <input type="text" name="satuan"value="<?php echo $res['satuan_id'];?>" readonly>
    </select><br><br>
		<input type="number" name="hpp" placeholder="harga" value="<?php echo $res['hpp'];?>"><br><br>
		Status <select name="status">
			<option value="1">Aktif</option>
			<option value="2">Belum Acc</option>
		</select><br><br>

		<input type="submit" name="upd_item" value="Update">

	</form>
<?php
	}
?>
</body>
</html>