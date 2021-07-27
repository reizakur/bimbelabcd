<?php
session_start();
include "../sistem/koneksi.php";

$id_jadwal = $_GET['id_jadwal'];
$query = mysqli_query($con,"DELETE FROM jadwal where id_jadwal='$id_jadwal'") or die(mysql_error());
	
if ($query) {

    header('location:_jadwal.php?sucsess');
}
?>


