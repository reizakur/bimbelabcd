<?php
	
	include('../sistem/koneksi.php');
	if (isset($_POST['bayar'])) {
		$id_sampah = $_POST['id_sampah'];
		$status = $_POST['status'];
		
	$query= mysqli_query($con,"UPDATE sampah SET id_sampah ='$id_sampah',status = '$status'
	WHERE id_sampah='$id_sampah'") or die (mysql_error());			
	
	if ($query) {
		header("Location: index.php?success");
	}
	}
	
?>
