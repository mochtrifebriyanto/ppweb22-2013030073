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
	<a href="tambahitemgrp.php">Tambah Data item</a> | 
	<a href="item_grp.php">Lihat Data</a>
	<br>
	<br>
	<br>
	<form action="proses.php" method="post">
  <?php
   //  $num = mysqli_query($conn,"SELECT MAX(SUBSTRING(id,3))+1 as sub from item_grp");
   //  while($d = mysqli_fetch_array($num)){
   //   $num2 = $d['sub'];
   //  }
   // $num1 = "01";
   ?>
  <input type="text" name="id" placeholder="Kode"><br><br>
  <input type="number" name="upline" placeholder="Upline"><br><br>
   <input type="number" name="level" placeholder="Level"><br><br>
   <input type="text" name="nama" placeholder="Nama"><br><br>
   <input type="text" name="keterangan" placeholder="Keterangan"><br><br>
   	Status <select name="status">
			<option value="1">Aktif</option>
			<option value="2">Belum Acc</option>
		</select><br><br>
		<input type="submit" name="additemgrp" value="Tambah">

	</form>
</body>
</html>