<?php session_start();

include('../../../assets/config/config.php');
$id = $_GET['id'];
$perintah = "DELETE from karyawan where nik_karyawan = '$id'";
$delete = mysql_query($perintah);

	if ($delete) {
	echo "<script>document.location='../?page=karyawan&status=berhasil';</script>";
} else { 
	echo "<script>document.location='../?page=karyawan&status=gagal';</script>";
} 
	
?>