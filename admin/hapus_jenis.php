<?php
session_start();
include "../sistem/koneksi.php";

$id_galeri = $_GET['id_galeri'];
$query = mysqli_query($con,"DELETE FROM galeri where id_galeri='$id_galeri'") or die(mysql_error());
	
if ($query) {

    header('location:_galeri.php?sucsess');
}
?>


