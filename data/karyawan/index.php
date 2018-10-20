<?php
	error_reporting(0);
	include('../../assets/config/config.php');
	$page = $_GET['page'];
	$status = $_GET['status'];
	session_start();
if (ISSET($_SESSION['kry']))
{
	$username = $_SESSION['kry'];
	$query = mysql_query("Select * from karyawan where nik_karyawan='$username'");
	$k = mysql_fetch_array($query);
}
else
header("location:../../");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SIMONKER</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="../../assets/css/dataTable.css" rel="stylesheet">
	
    <!-- Animation library for notifications   -->
    <link href="../../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="../../assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />

    <link href="../../assets/css/themify-icons.css" rel="stylesheet">


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                 SIMONKER
                </a>
            </div>

            <ul class="nav">
					<li class="<?php if ($page==''){echo 'active';}?>">
						<a href="../karyawan/">
							<i class="ti-home"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="<?php if ($page=='kerusakan'){echo 'active';}?>">
						<a href="?page=kerusakan">
							<i class="ti-user"></i>
							<p>Laporan Kerusakan</p>
						</a>
					</li>
					<li class="<?php if ($page=='progres'){echo 'active';}?>">
						<a href="?page=progres">
							<i class="ti-user"></i>
							<p>Progres Perbaikan</p>
						</a>
					</li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>                             
									<p>Hello, <b><u><?php echo $k['nama_karyawan']; ?></u></b></p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="../../logout.php">Keluar</a></li>

                              </ul>
                        </li>
					</ul>
                    <a class="navbar-brand" href="">PT. XYZ</a>
                </div>
			  </div>
        </nav>
		
        <div class="content">
            <div class="container-fluid">

		<?php
			if ($page=="") { include('dashboard.php');} else 
			if ($page=="kerusakan") { include('kerusakan.php');} else  			
			if ($page=="progres") { include('progres.php');} else  
		?>
            </div>
        </div>
		
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">

                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://duta-web.com" target="_blank">Hafidz Annur F</a>
                </div>
            </div>
        </footer>

    </div>

	
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
	
	<script src="../../assets/js/Table.js" type="text/javascript"></script>
	
	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../../assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="../../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../../assets/js/bootstrap-notify.js"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="../../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/demo.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){

        	demo.initChartist();
    	});
	</script>
	
	<?php 
		if (empty($page)and($status=='login')){
	?>
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-announcement',
            	message: "Welcome to <b>SIMONKER</b> - Anda telah berhasil masuk sebagai Karyawan."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>
	<?php
		} else
	?>

		<?php 
		if ((isset($page))and($status=='berhasil')){
	?>
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-announcement',
            	message: "<b>Selamat</b> - Data Berhasil Disimpan."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>
	<?php
		} else
	?>
	
			<?php 
		if ((isset($page))and($status=='gagal')){
	?>
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-announcement',
            	message: "<b>Peringatan</b> - Data Gagal Disimpan."

            },{
                type: 'danger',
                timer: 4000
            });

    	});
	</script>
	<?php
		}
	?> 
	
	
  <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>