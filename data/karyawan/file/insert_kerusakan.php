<?php
include('../../../assets/config/config.php');

$nik = $_POST['nik'];
$tgl = $_POST['tgl'];
$krs = $_POST['kerusakan'];

	
$insert = mysql_query ("insert into monitoring_kerusakan values ('','$nik','$tgl','$krs','','','','0');");

if ($insert) {
	echo "<script>document.location='../?page=kerusakan&status=berhasil';</script>";
} else { 
	echo "<script>document.location='../?page=kerusakan&status=gagal';</script>";
} 	
?>