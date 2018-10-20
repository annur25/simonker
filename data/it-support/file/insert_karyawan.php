<?php
include('../../../assets/config/config.php');

$nik = $_POST['nik'];
$nm = $_POST['nm'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alm = $_POST['alamat'];
$psw = md5($_POST['nik']);
	
$insert = mysql_query ("insert into karyawan values ('$nik','$nm','$email','$telp','$alm','$psw');");

if ($insert) {
	echo "<script>document.location='../?page=karyawan&status=berhasil';</script>";
} else { 
	echo "<script>document.location='../?page=karyawan&status=gagal';</script>";
} 	
?>