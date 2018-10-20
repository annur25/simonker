<?php
date_default_timezone_set("Asia/Bangkok");
?>
		<div class="row">
                    <div class="col-lg-12">
						<div class="card" style="padding:15px;">
                                <table id="tabel-data" class="table table-bordered table-hover" width="100%" cellspacing="0" width="100%" cellspacing="0">
                                    <thead>
										<tr>
										<th>No</th>
                                    	<th>Tanggal & Time</th>
                                    	<th>Deskripsi</th>
										<th>Keterangan</th>
										<th>Status</th>
										</tr>
                                    </thead>
                                    <tbody>
<?php
include('../../assets/config/config.php');
$query1 = mysql_query("SELECT * FROM monitoring_kerusakan where nik_karyawan='$username' ORDER by tgl_time_kerusakan DESC");
$no=1;
while ($k = mysql_fetch_array($query1)) {
$status = $k['status'];
?>																	
 										<tr>
                                        	<td class="text-center"><?php echo $no; ?></td>
                                        	<td class="text-center"><?php echo $k['tgl_time_kerusakan']; ?></td>
                                        	<td><?php echo $k['kerusakan']; ?></td>
											<td><?php echo $k['keterangan']; ?></td>
											<td class="text-center">
											
											<?php 
												if ($status==0){ 
											?>
											<a href="" class="btn btn-danger btn-sm">Dalam Antrian</a> 
											<?php 
											} else 
												if ($status==1){ 
											?>
											<a href="" class="btn btn-warning btn-sm">Sedang Diperbaiki</a> 
											<?php  } else
												if ($status==2){ 
											?>
											<a href="" class="btn btn-success btn-sm">Selesai Diperbaiki</a> 
											<?php  } 												
											?>
											</a>
											</td>
											
										</tr>
<?php
	$no++;
}
?>
                                    </tbody>
                                </table>
						</div>
					</div>
                </div>		