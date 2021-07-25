<?php 
session_start();
include('../sistem/koneksi.php');
if (isset($_POST['jenis'])) {	
	$id_jadwal		=	$_POST['id_jadwal'];
	$id_kelas		=	$_POST['id_kelas'];
	$id_hari		=	$_POST['id_hari'];
	$harga	=	$_POST['harga'];
	$total		=	$_POST['total'];
	$vlampiran		=	$_FILES['gambar']['name'];
	$tlampiran		=	$_FILES['gambar']['tmp_name'];
	$dir			="img/";
	$berat		=	$_POST['berat'];
	$harga		=	$_POST['harga'];
	$nama		=	$_POST['nama'];
	$id		=	$_POST['id'];
	$id_tipe_sampah		=	$_POST['id_tipe_sampah'];
	$nama_jenis		=	$_POST['nama_jenis'];
	$sql= mysqli_query($con,"insert into sampah 
		(id_sampah,deskripsi,id_jenis,tipe_sampah,total,gambar,berat,harga,nama,id,id_tipe_sampah,nama_jenis) values 
		('','$deskripsi','$id_jenis','$tipe_sampah','$total','$vlampiran','$berat','$harga','$nama','$id','$id_tipe_sampah','$nama_jenis')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
	move_uploaded_file($tlampiran, $upload);
	if($sql==true) {
		header("Location:data_sampah.php");
	}
else{
	echo "Query Insert Gagal";
}
}
?>
