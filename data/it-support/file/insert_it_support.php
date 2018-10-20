<?php
include('../../../assets/config/config.php');

$nik = $_POST['nik'];
$nm = $_POST['nm'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alm = $_POST['alamat'];
$psw = md5($_POST['nik']);
	
$insert = mysql_query ("insert into it_support values ('$nik','$nm','$email','$telp','$alm','$psw');");

if ($insert) {
	echo "<script>document.location='../?page=it-support&status=berhasil';</script>";
} else { 
	echo "<script>document.location='../?page=it-support&status=gagal';</script>";
} 	
?>