<?php 
session_start();
include('../sistem/koneksi.php');
if (isset($_POST['jenis'])) {	
	$id_jenis		=	$_POST['id_jenis'];
	$nama_jenis		=	$_POST['nama_jenis'];
	$harga_jenis		=	$_POST['harga_jenis'];
	$tipe		=	$_POST['tipe'];
	$id_tipe		=	$_POST['id_tipe'];
		$sql= mysqli_query($con,"insert into jenis_sampah 
		(id_jenis,nama_jenis,harga_jenis,tipe,id_tipe) values 
		('','$nama_jenis','$harga_jenis','$tipe','$id_tipe')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
	move_uploaded_file($tlampiran, $upload);
	if($sql==true) {
		header("Location:tambah_jenis.php");
	}
else{
	echo "Query Insert Gagal";
}
}
?>


