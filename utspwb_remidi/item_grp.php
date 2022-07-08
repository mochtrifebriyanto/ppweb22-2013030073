<!DOCTYPE html>
<html>
<head>
	<style>
	body{
		background-color  : silver;
	}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UTS</title>
</head>
<body>
	<?php
		include 'menu.php';
	?>
	<br>
	<h1>
		Tabel Item Grup
	</h1>

	<a href="tambahitemgrp.php">Tambah Data Group item</a>
	<br>
	<br>
	<table border="10" style="border-color: metal;">
		<tr>
			<td>Nomor</td>
			<td>Kode</td>
			<td>Upline</td>
			<td>Level</td>
			<td>Nama</td>
			<td>Keterangan</td>
    <td>Aktif</td>
    <td>Tanggal dibuat</td>
    <td>Tanggal diupdate</td>
			<td>Aksi</td>
		</tr>	
		<?php
			include 'koneksi.php';
			$item_grp = "SELECT * FROM item_grp";
			$res = $conn->query($item_grp);
			if($res->num_rows > 0){
				$i = 0;
				while($dat = $res->fetch_assoc()){
	 				$i++;
	 					echo "<tr>
	 							<td>$i</td>
	 							<td>".$dat["id"]."</td>
	 							<td>".$dat["upline"]."</td>
          <td>".$dat["level"]."</td>
         <td>".$dat["nama"]."</td>
	 							<td>".$dat["keterangan"]."</td>
         <td>".$dat["aktif"]."</td>
	 							<td>".$dat["crt_date"]."</td>
	 							<td>".$dat["upd_date"]."</td>
	 							<td> <a href='upditemgrp.php?grp_id=".$dat['id']."'>Update</a>| <a href='proses.php?grp_id=".$dat['id']."'>Delete</a></td>
	 						</tr>";
	 					} 
	 				}	
		?>
	</table>
</body>
</html>