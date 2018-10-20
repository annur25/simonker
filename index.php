<?PHP
error_reporting(0);
session_start();
if (ISSET($_SESSION['kry']))
{
	header("location:data/karyawan/");
} else
if (ISSET($_SESSION['its']))
{
	header("location:data/it-support/");
} else 
if (ISSET($_SESSION['mit']))
{
	header("location:data/manager-it/");
} else 
?>

<html>
<head>
<title>Simonker</title>
<script src="assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->

<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

    <!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


	<link href="assets/css/s.css" rel="stylesheet" type="text/css" media="all"/>


</head>
<body>
<!--header start here-->


<div class="header">
		<div class="header-main">
		<h1>Sistem Informasi Monitoring Kerusakan Perangkat IT</h1>
		<hr>
			<div class="header-bottom">
				<div class="header-right w3agile">
						
					<form action="cek-login.php" method="post" class="form-group">
						
						<input class="form-control" type="text"  placeholder="Masukan NIK" name="nik" /><br>
						<input class="form-control" type="password"  placeholder="Password" name="password" /><br>
						
						<select name="status" class="form-control">
							<option value="KRY">Karyawan</option>
							<option value="ITS">IT Support</option>
							<option value="MIT">Manager IT</option>
						</select>
						<hr>
						<input class="btn btn-info btn-block" type="submit" value="Login">
					</form>	
					
<!--header end here-->
<div class="copyright">
	<p>2018</p>
</div>					
				</div>
			</div>
		</div>
</div>



    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	
	<script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
	

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>