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
		Tabel Item
	</h1>

	<a href ="tambahitem.php">Tambah Data Item</a>
	<br>
	<br>
	<table border="10" style="border-color: metal;">
		<tr>
			<td>Nomor</td>
			<td>Kode</td>
			<td>Barcode</td>
			<td>Nama</td>
			<td>Satuan</td>
    <td>Kategori</td>
			<td>HPP</td>
   <td>Aktif</td>
			<td>Tanggal Dibuat</td>
			<td>Tanggal Update</td>
			<td>Aksi</td>
			<td>Harga</td>
		</tr>	
		<?php
			include 'koneksi.php';
			$item = "SELECT item.*,item_grp.nama as nmkategori FROM item inner join item_grp on item.item_grp_id=item_grp.id";
			$res = $conn->query($item);
			if($res->num_rows > 0){
				$i = 0;
				while($dat = $res->fetch_assoc()){
      if($dat["aktif"]==1){
        $status = "Aktif";
      }else {
        $status = "Belum Acc"; 
      }
	 				$i++;
	 					echo "<tr>
	 							<td>$i</td>
	 							<td>".$dat["id"]."</td>
	 							<td>".$dat["barcode"]."</td>
	 							<td>".$dat["nama"]."</td>
	 							<td>".$dat["satuan_id"]."</td>
        <td>".$dat["nmkategori"]."</td>
	 							<td>".$dat["hpp"]."</td>
                
         <td>".$status."</td>
	 							<td>".$dat["crt_date"]."</td>
	 							<td>".$dat["upd_date"]."</td>
	 							<td> <a href='upditem.php?item_id=".$dat['id']."'>Update</a>| <a href='proses.php?item_id=".$dat['id']."'>Delete</a></td>
								<td> <harga></td>
	 						</tr>";
	 					} 
	 				}	
		?>
	</table>
</body>
</html>