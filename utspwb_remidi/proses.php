<?php
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');

//menambah data satuan
if(isset($_POST['satuan_add']) && $_POST['satuan_add']=='Tambah'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif = $_POST['status'];
	$crt = NULL;
	$crt_date = date("Y-m-d H:i:s") ;

	$sql = "INSERT INTO satuan
			(id,nama,keterangan,aktif,crt,crt_date)
			VALUES
			('$id','$nama','$keterangan','$aktif','$crt','$crt_date')";
	if (!$res = $conn->query($sql))
		echo $sql;
	else
		header("location: satuan.php");	  
} 

//hapus satuan'
if (isset($_GET['id_satuan'])){
	$id = $_GET['id_satuan'];
	$sql = "DELETE from satuan
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: satuan.php");
}


//updatetabel satuan
if(isset($_POST['upd_satuan']) && $_POST['upd_satuan']=='Update'){
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif =$_POST['status'];
	$upd_date = date("Y-m-d H:i:s") ;

	$sql = "UPDATE satuan
			set id='$nama',nama='$nama',keterangan='$keterangan',
			aktif='$aktif',upd_date='$upd_date' WHERE id='$nama'";
	if (!$res = $conn->query($sql))
		echo $sql;
	else
		header("location: satuan.php");
}


//menambah item
if(isset($_POST['additem']) && $_POST['additem']=='Tambah'){
 $id = $_POST['id'];
	$nama = $_POST['nama'];
	$nk = $_POST['nk'];
 $barcode = $_POST['barcode'];
 $satuan = $_POST['satuan'];
 $hpp = $_POST['hpp'];

	$aktif = $_POST['status'];
	$crt = NULL;
	$crt_date = date("Y-m-d H:i:s") ;
	    $harga = $_POST['harga'];
	$sql = "INSERT INTO item	(id,item_grp_id,nama,barcode,satuan_id,hpp,aktif,crt,crt_date,harga)
	VALUES	('$id','$nk','$nama','$barcode','$satuan','$hpp','$aktif','$crt','$crt_date','$harga')";
	
	
	if (!$res = $conn->query($sql))
		echo $sql;
	else
	header("location: item.php");	  
}

//hapus item
if (isset($_GET['item_id'])){
	$id = $_GET['item_id'];
	$sql = "DELETE from item
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: item.php");
}

//updatetabel item
if(isset($_POST['upd_item']) && $_POST['upd_item']=='Update'){
 $id = $_POST['id'];
	$nama = $_POST['nama'];
	$nk = $_POST['nk'];
 $barcode = $_POST['barcode'];
 $satuan = $_POST['satuan'];
 $hpp = $_POST['hpp'];
	$aktif = $_POST['status'];
	$upd = NULL;
	$upd_date = date("Y-m-d H:i:s") ;



	$sql = "UPDATE item
			set nama='$nama',item_grp_id='$nk',barcode='$barcode',satuan_id='$satuan',hpp='$hpp',	aktif='$aktif',upd='$upd',upd_date='$upd_date' WHERE id='$id'";
	if (!$res = $conn->query($sql))
		echo $sql;
	else
		header("location: item.php");
}

//menambah item grp
if(isset($_POST['additemgrp']) && $_POST['additemgrp']=='Tambah'){
 $id = $_POST['id'];
 $upline = $_POST['upline'];
	$nama = $_POST['nama'];
	$level = $_POST['level'];
 $keterangan = $_POST['keterangan'];
	$aktif = $_POST['status'];
	$crt = NULL;
	$crt_date = date("Y-m-d H:i:s") ;

	$sql = "INSERT INTO item_grp	(id,upline,nama,level,keterangan,aktif,crt,crt_date)
			VALUES	('$id','$upline','$nama','$level','$keterangan','$aktif','$crt','$crt_date')";
	if (!$res = $conn->query($sql))
		echo $sql;
	else
	header("location: item_grp.php");	  
}

//hapus item grup
if (isset($_GET['grp_id'])){
	$id = $_GET['grp_id'];
	$sql = "DELETE from item_grp
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: item_grp.php");
}

//updatetabel item
if(isset($_POST['upditemgrp']) && $_POST['upditemgrp']=='Update'){
 $id = $_POST['id'];
 $upline = $_POST['upline'];
	$nama = $_POST['nama'];
	$level = $_POST['level'];
 $keterangan = $_POST['keterangan'];
	$aktif = $_POST['status'];
	$upd = NULL;
	$upd_date = date("Y-m-d H:i:s") ;

	$sql = "UPDATE item_grp
			set upline='$upline',nama='$nama',level='$level',keterangan='$keterangan',harga='$harga'	aktif='$aktif',upd='$upd',upd_date='$upd_date' WHERE id='$id'";
	if (!$res = $conn->query($sql))
		echo $sql;
	else
		header("location: item_grp.php");
}

?>