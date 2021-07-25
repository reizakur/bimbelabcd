<?php 
session_start();
include('../sistem/koneksi.php');
if (isset($_POST['jadwal'])) {	
	$id_kelas		=	$_POST['id_kelas'];
	$harga	=	$_POST['harga'];
	$kelas		=	$_POST['kelas'];	
	$jam		=	$_POST['jam'];
	$hari		=	$_POST['hari'];
	$sql= mysqli_query($con,"insert into jadwal 
		(id_kelas,kelas,harga,jam,hari) values 
		('$id_kelas','$kelas','$harga','$jam','$hari')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
	move_uploaded_file($tlampiran, $upload);
	if($sql==true) {
		header("Location:_jadwal.php");
	}
else{
	echo "Query Insert Gagal";
}
}
?>
