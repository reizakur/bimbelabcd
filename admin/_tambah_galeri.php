<?php 
session_start();
include('../sistem/koneksi.php');
if (isset($_POST['galeri'])) {	
	$vlampiran		=	$_FILES['gambar']['name'];
	$tlampiran		=	$_FILES['gambar']['tmp_name'];
	$dir			="images/";
	$judul		=	$_POST['judul'];
	$sql= mysqli_query($con,"insert into galeri 
		(gambar,judul) values 
		('$vlampiran','$judul')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
	move_uploaded_file($tlampiran, $upload);
	if($sql==true) {
		header("Location:_galeri.php");
	}
else{
	echo "Query Insert Gagal";
}
}
?>
