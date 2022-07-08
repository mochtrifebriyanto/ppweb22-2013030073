<?php 
include "koneksi.php";
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah data item</title>
</head>
<body>
	<?php
	include "menu.php"; 
	?>
	<a href="tambahitem.php">Tambah Data item</a> | 
	<a href="item.php">Lihat Data</a>
	<br>
	<br>
	<br>
	<form action="proses.php" method="post">
  <?php
//SELECT SUBSTRING(id,6) as sub from item;
   //  $num = mysqli_query($conn,"SELECT MAX(SUBSTRING(id,6))+1 as sub from item");
   //  while($d = mysqli_fetch_array($num)){
   //   $num2 = $d['sub'];
   //  }
   // $num1 = "01010";
   ?>
  <input type="text" name="id" placeholder="Kode"><br><br>
  		<input type="number" name="barcode" placeholder="Barcode"><br><br>
   <input type="text" name="nama" placeholder="Nama item"><br><br>
	 <select name="nk">
    <?php
        $kt = mysqli_query($conn,"select id,nama from item_grp");
        while($d = mysqli_fetch_array($kt)){
        echo "<option value=".$d['id'].">".$d['nama']."</option>";
        }
    ?>
  </select>
  <br><br>
   <select name="satuan">
        <?php
        $st = mysqli_query($conn,"select id,nama from satuan");
        while($d = mysqli_fetch_array($st)){
        echo "<option value=".$d['id'].">".$d['nama']."</option>";
        }
    ?>
    </select><br><br>
		<input type="number" name="hpp" placeholder="HPP"><br><br>
		<input type="number" name="harga" placeholder="harga"><br><br>
		Status <select name="status">
			<option value="1">Aktif</option>
			<option value="2">Belum Acc</option>
		</select><br><br>
	harga<input type="number" name="harga" placeholder="harga"><br><br>
		<input type="submit" name="additem" value="Tambah">

	</form>

</body>
</html>