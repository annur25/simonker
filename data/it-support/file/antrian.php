<?php 
	/** Modal Progress **/
	date_default_timezone_set("Asia/Bangkok");
	$date = date("Y-m-d h:i:s");
	$id = $_GET['id'];
	include('../../../assets/config/config.php');
?>				

			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Perbaikan</h4>
			</div>
			<form name="antrian" class="form-group" action="file/insert_perbaikan.php" method="POST">
			<div class="modal-body">
					<div class="form-group">
                        <label>Tanggal dan Waktu</label>
                         <input type="text" class="form-control border-input" name="tgl" value="<?php echo $date;?>"  readonly />
						 <input type="hidden" class="form-control border-input" name="id" value="<?php echo $id ;?>"  readonly />
                    </div>	
					<div class="form-group">
                        <label>IT Support</label>
                         <select name="its" class="form-control border-input">
							<option>Pilih IT Support</option>
<?php
	$query2 = mysql_query("SELECT * FROM it_support ORDER BY nama_it_support ASC");
	$no=1;
	while ($its = mysql_fetch_array($query2)) {
?>									
							<option value="<?php echo $its['nik_it_support'];?>"><?php echo $its['nama_it_support'];?></option>
<?php
	}
?>
						 </select>
                    </div>	
				
			</div>
			<div class="modal-footer">
			<a href="?page=kerusakan" class="btn btn-danger">Batal</a>
			<button id="mylink" type="submit" class="btn btn-warning">Perbaiki</button>
			</div>   
			</form>
        </div>