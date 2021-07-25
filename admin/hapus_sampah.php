<?php
session_start();
include "../sistem/koneksi.php";

$id_sampah = $_GET['id_sampah'];

$query = mysqli_query($con,"DELETE FROM sampah where id_sampah='$id_sampah'") or die(mysql_error());
	
if ($query) {

    header('location:index.php?sucsess');
}
?>


