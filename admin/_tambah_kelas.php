<?php 
session_start();
include('../sistem/koneksi.php');
if (isset($_POST['kirim'])) {	
	$kelas		=	$_POST['kelas'];
	
		$sql= mysqli_query($con,"insert into kelas 
		(kelas) values 
		('$kelas')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
	move_uploaded_file($tlampiran, $upload);
	if($sql==true) {
		header("Location:_kelas.php");
	}
else{
	echo "Query Insert Gagal";
}
}
?>


