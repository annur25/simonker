<?php
date_default_timezone_set("Asia/Bangkok");
?>
		<div class="row">
                    <div class="col-lg-12">
						<div class="card" style="padding:15px;">
						<h3><i class="ti-settings"></i> &nbsp; Sedang Perbaikan</h3>
						<hr>
                                <table id="tabel-data" class="table table-bordered table-hover" width="100%" cellspacing="0" width="100%" cellspacing="0">
                                    <thead>
										<tr>
										<th>No</th>
                                    	<th>Tanggal & Time</th>
                                    	<th>Nama Karyawan</th>
										<th>Kerusakan</th>
										<th>Status</th>
										</tr>
                                    </thead>
                                    <tbody>
<?php
include('../../assets/config/config.php');
$query1 = mysql_query("SELECT * FROM monitoring_kerusakan a, karyawan b where a.nik_karyawan=b.nik_karyawan and a.status='1' ORDER by tgl_time_kerusakan DESC");
$no=1;
while ($k = mysql_fetch_array($query1)) {
$status = $k['status'];
?>																	
 										<tr>
                                        	<td class="text-center"><?php echo $no; ?></td>
                                        	<td class="text-center"><?php echo date('d-m-Y (h:i:s)',strtotime($k['tgl_time_kerusakan'])); ?></td>
                                        	<td><?php echo $k['nama_karyawan']; ?></td>
											<td><?php echo $k['kerusakan']; ?></td>
											<td class="text-center">
											<a href="file/perbaikan.php?id=<?php echo $k['id'];?>" class="btn btn-warning btn-warning" data-toggle="modal" data-target="#perbaikan">Sedang Diperbaiki</a>
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

<?php 
	/** Modal Progress **/
	$date = date("Y-m-d h:i:s");
	$id = $_GET['id'];
?>				

<!-- Modal Hapus Data -->
<div class="modal fade" id="perbaikan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md" role="document">
		        <div class="modal-content">
				
				</div>
    </div>
</div>	