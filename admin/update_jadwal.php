<?php
	include ('../sistem/koneksi.php');
	//-----------------------//
	if (isset($_POST['update_jadwal'])) {
		$id_jadwal = $_POST['id_jadwal'];
        $id_kelas = $_POST['id_kelas'];
        $hari =$_POST['hari']; 
		$jam = $_POST['jam'];
		$harga = $_POST['harga'];
        $kelas = $_POST['kelas'];
	$query= mysqli_query($con,"UPDATE jadwal SET id_jadwal ='$id_jadwal',jam = '$jam',id_kelas = '$id_kelas',hari = '$hari',harga = '$harga',
    kelas = '$kelas'
	WHERE id_jadwal='$id_jadwal'") or die (mysql_error());			
	
	if ($query) {
		header("Location: _jadwal.php?success");

	}else{
        
    }
	}
	
?>
