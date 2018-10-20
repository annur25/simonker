<?php
include('assets/config/config.php');

session_start();

//tangkap data dari form login
$username = $_POST['nik'];
$password = $_POST['password'];
$status = $_POST['status'];

//untuk mencegah sql injection 
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

if ($status=="KRY") {
$q = mysql_query("Select * from karyawan where nik_karyawan='".$username."' and password='".md5($password)."'");

	if (mysql_num_rows($q) == 1) {
		$_SESSION['kry'] = $username;
		header('location:data/karyawan/?status=login');
	}
	else {
		header('location:../SIMONKER/?status=gagal-login');
	}
} else 
if ($status=="ITS") {
$q = mysql_query("Select * from it_support where nik_it_support='".$username."' and password='".md5($password)."'");

	if (mysql_num_rows($q) == 1) {
		$_SESSION['its'] = $username;
		header('location:data/it-support/?status=login');
	}
	else {
		header('location:../SIMONKER/?status=gagal-login');
	}
} else {

$q = mysql_query("Select * from manager_it where nik_manager_it='".$username."' and password='".md5($password)."'");

	if (mysql_num_rows($q) == 1) {
		$_SESSION['mit'] = $username;
		header('location:data/manager-it/?status=login');
	}
	else {
		header('location:../SIMONKER/?status=gagal-login');
	}

}
?>
