<?php session_start();

include('../../../assets/config/config.php');
$id = $_GET['id'];
$perintah = "DELETE from it_support where nik_it_support = '$id'";
$delete = mysql_query($perintah);

	if ($delete) {
	echo "<script>document.location='../?page=it-support&status=berhasil';</script>";
} else { 
	echo "<script>document.location='../?page=it-support&status=gagal';</script>";
} 
	
?>