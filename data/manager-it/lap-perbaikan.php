<?php
date_default_timezone_set("Asia/Bangkok");
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
?>
		<div class="row">
                    <div class="col-lg-12">
						<div class="card" style="padding:15px;">
						<div class="row">
						<div class="col-md-8">
						<h3><i class="ti-agenda"></i> &nbsp; Laporan Perbaikan</h3>
						</div>
						<div class="col-md-4" style="margin-top:20px;">
							<div class="row">
								<form method="POST" action="">
									<div class="col-md-6">
									<select class="form-control border-input" name="bln">
										<?php 
											if ((empty($bln)) or (empty($thn))) {
										?>
										<option value="01">Pilih Bulan</option>
										<?php 
											} else {
										?>
										<option value="<?php echo $bln;?>"><?php echo $bulan[$bln];?></option>
										<?php
											}
										?>
										<option value="1">Januari</option>
										<option value="2">Februari</option>
										<option value="3">Maret</option>
										<option value="4">April</option>
										<option value="5">Mei</option>
										<option value="6">Juni</option>
										<option value="7">Juli</option>
										<option value="8">Agustus</option>
										<option value="9">September</option>
										<option value="10">Oktober</option>
										<option value="11">November</option>
										<option value="12">Desember</option>
									</select>
									</div>
									<div class="col-md-6">
									<select class="form-control border-input" name="thn" onchange="this.form.submit()">
										<?php 
											if ((empty($bln)) or (empty($thn))) {
										?>
										<option value="2018">Pilih Tahun</option>
										<?php 
											} else {
										?>
										<option value=""><?php echo $thn;?></option>
										<?php
											}
										?>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
									</select>
									</div>
									</div>
								</form>
							</div>
							</div>

						<hr>
                                <table id="tabel-data" class="table table-bordered table-hover" width="100%" cellspacing="0" width="100%" cellspacing="0" style="font-size:11px;">
                                    <thead>
										<tr>
										<th>No</th>
                                    	<th>NIK Karyawan</th>
										<th>Kerusakan</th>
										<th>NIK IT Support</th>
										<th>Tanggal Perbaikan</th>
										<th>Deskripsi Perbaikan</th>
										<th>Status</th>
										</tr>
                                    </thead>
                                    <tbody>
<?php
include('../../assets/config/config.php');

if ((empty($bln)) and (empty($thn))) {
	$query1 = mysql_query("SELECT * FROM monitoring_kerusakan where status='2' ORDER by tgl_time_kerusakan DESC");
} else {
	$query1 = mysql_query("SELECT * FROM monitoring_kerusakan where month(tgl_time_kerusakan)='$bln' and year(tgl_time_kerusakan)='$thn' and status='2' ORDER by tgl_time_kerusakan DESC");
}
$no=1;
while ($k = mysql_fetch_array($query1)) {
$status = $k['status'];

?>																	
 										<tr>
                                        	<td class="text-center"><?php echo $no; ?></td>
                                        	<td class="text-center"><?php echo $k['nik_karyawan']; ?></td>
                                        	<td><?php echo $k['kerusakan']; ?></td>
											<td class="text-center"><?php echo $k['nik_it_support']; ?></td>
											<td class="text-center"><?php echo date('d-m-Y (h:i:s)',strtotime($k['tgl_time_perbaikan'])); ?></td>
											<td><?php echo $k['keterangan']; ?></td>
											<td class="text-center">
											<a href="#" class="btn btn-success">Selesai Diperbaiki</a>
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
