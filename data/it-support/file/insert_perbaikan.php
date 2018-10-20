<?php
include('../../../assets/config/config.php');

$id = $_POST['id'];
$tgl = $_POST['tgl'];
$its = $_POST['its'];

	
$update = mysql_query ("update monitoring_kerusakan set
tgl_time_perbaikan = '$tgl',
nik_it_support = '$its',
status=1 
where id='$id'");

if ($update) {
	echo "<script>document.location='../?page=kerusakan&status=berhasil';</script>";
} else { 
	echo "<script>document.location='../?page=kerusakan&status=gagal';</script>";
} 	
?>