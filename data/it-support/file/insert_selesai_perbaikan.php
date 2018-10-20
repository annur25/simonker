<?php
include('../../../assets/config/config.php');

$id = $_POST['id'];
$ket = $_POST['ket'];

	
$update = mysql_query ("update monitoring_kerusakan set
keterangan = '$ket',
status=2 
where id='$id'");

if ($update) {
	echo "<script>document.location='../?page=perbaikan&status=berhasil';</script>";
} else { 
	echo "<script>document.location='../?page=perbaikan&status=gagal';</script>";
} 	
?>