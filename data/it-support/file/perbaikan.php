<?php 
	/** Modal Progress **/
	$id = $_GET['id'];
	include('../../../assets/config/config.php');
	$query = mysql_query("select * from monitoring_kerusakan a, karyawan b, it_support c where a.nik_karyawan=b.nik_karyawan and a.nik_it_support=c.nik_it_support and a.id='$id'");
	$p = mysql_fetch_array($query);
?>				

			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Perbaikan</h4>
			</div>
			<form name="perbaikan" class="form-group" action="file/insert_selesai_perbaikan.php" method="POST">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-5">
					<div class="form-group">
                        <label>Tanggal & Waktu Pelaporan</label>
                         <input type="text" class="form-control border-input" name="tgl" value="<?php echo date('d-m-Y h:i:s',strtotime($p['tgl_time_kerusakan']));?>"  readonly />
						 <input type="hidden" class="form-control border-input" name="id" value="<?php echo $id ;?>"  readonly />
                    </div>	
					</div>	
					<div class="col-md-7">
					<div class="form-group">
						 <label>Nama Karyawan</label>
						<input type="text" class="form-control border-input" value="<?php echo $p['nama_karyawan'];?>"  readonly />
                    </div>	
					</div>
				</div>
					<div class="form-group">
						 <label>Kerusakan</label>
						<textarea class="form-control border-input" rows=3 readonly><?php echo $p['kerusakan'];?></textarea>
                    </div>
				<div class="row">
					<div class="col-md-5">
					<div class="form-group">
                        <label>Tanggal & Waktu Perbaikan</label>
                         <input type="text" class="form-control border-input" name="tgl" value="<?php echo date('d-m-Y h:i:s',strtotime($p['tgl_time_perbaikan']));?>"  readonly />
                    </div>	
					</div>	
					<div class="col-md-7">
					<div class="form-group">
						 <label>Nama IT Support</label>
						<input type="text" class="form-control border-input" value="<?php echo $p['nama_it_support'];?>"  readonly />
                    </div>	
					</div>
				</div>					
					<div class="form-group">
						 <label>Deskripsi Perbaikan</label>
						<textarea class="form-control border-input" name="ket" rows=5></textarea>
                    </div>
				
			</div>
			<div class="modal-footer">
			<a href="?page=perbaikan" class="btn btn-warning">Batal</a>
			<button id="mylink" type="submit" class="btn btn-primary btn-info">Selesai Perbaikan</button>
			</div>   
			</form>
        </div>