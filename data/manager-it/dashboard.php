
				<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="text-center">
                                            <h3><b>SELAMAT DATANG DI AREA MANAGER IT</b></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
				<div class="row">
                    <div class="col-md-12">
						<marquee>SIMONKER (Sistem Monitoring Kerusakan Perangkat IT) di PT. XYZ</marquee>
						<hr>
                    </div>
                </div>				
				<div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="content">
							<h5><i class="ti-reload"></i> &nbsp; Status Server</h5>
							<hr>
								<?php  
								 $sumber = 'https://server-status-tsp.firebaseapp.com/status';
								 $konten = file_get_contents($sumber);
								 $data = json_decode($konten, true);

								?>

							 <table class="table table-bordered table-hover">
							 <thead>
							  <tr>
							   <th>ID</th>
							   <th>Alias</th>
							   <th>Location</th>
							   <th>Uptime</th>
							   <th>Status</th>
							  </tr>
							  </thead>
							  <?php   
							   for($a=0; $a < count($data); $a++)
							   {
								print "<tr>";
								print "<td>".$data[$a]['id']."</td>";
								print "<td>".$data[$a]['alias']."</td>";
								print "<td>".$data[$a]['location']."</td>";
								print "<td>".$data[$a]['uptime']."</td>";
								print "<td>".$data[$a]['status']."</td>";
								print "</tr>";
							   }
							  ?>
							 </table>
                            </div>
                        </div>
                    </div>
<?php
	include('../../assets/config/config.php');
	$query1 = mysql_query("SELECT count(id) as jml_kerusakan FROM monitoring_kerusakan where status='0'");
	$jml1 = mysql_fetch_array($query1);
	$query2 = mysql_query("SELECT count(id) as jml_perbaikan FROM monitoring_kerusakan where status='1'");
	$jml2 = mysql_fetch_array($query2);
	$query3 = mysql_query("SELECT count(id) as jml_selesai FROM monitoring_kerusakan where status='2'");
	$jml3 = mysql_fetch_array($query3);
?>					
                    <div class="col-md-4">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-announcement"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Laporan</p>
                                            Kerusakan
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> &nbsp; Jumlah : <?php echo $jml1['jml_kerusakan']; ?> Laporan Kerusakan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>		
					<div class="col-md-4">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                           <i class="ti-settings"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Sedang</p>
                                            Diperbaiki
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> &nbsp; Jumlah : <?php echo $jml2['jml_perbaikan']; ?> Sedang Diperbaiki
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-md-4">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-agenda"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Selesai</p>
                                            Diperbaiki
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> &nbsp; Jumlah : <?php echo $jml3['jml_selesai']; ?> Selesai Diperbaiki
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>					
                </div>	
