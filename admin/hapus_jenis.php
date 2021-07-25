<?php
session_start();
include "../sistem/koneksi.php";

$id_kelas = $_GET['id_kelas'];
$query = mysqli_query($con,"DELETE FROM kelas where id_kelas='$id_kelas'") or die(mysql_error());
	
if ($query) {

    header('location:_kelas.php?sucsess');
}
?>


