<?php
	date_default_timezone_set("Asia/Bangkok");
	$date = date("Y-m-d h:i:s");
	
	include('../../assets/config/config.php');
	$query1 = mysql_query("select * from monitoring_kerusakan where nik_karyawan='$username' order by tgl_time_kerusakan DESC");
	$mk = mysql_fetch_array($query1);
	$status = $mk['status'];
	if (($status==2) or (empty($mk))){
?>
			<div class="row">
			<div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Laporan Kerusakan</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="file/insert_kerusakan.php">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="hidden" class="form-control border-input" name="nik" value="<?php echo $username;?>">
												<input type="text" class="form-control border-input" value="<?php echo $k['nama_karyawan'];?>" readonly>
                                            </div>
                                        </div>
										<div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal dan Waktu</label>
                                                <input type="text" class="form-control border-input" name="tgl" value="<?php echo $date;?>"  readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Deskripsi Kerusakan</label>
                                                <textarea rows="4" class="form-control border-input"  name="kerusakan" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
					
<div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="../../assets/img/background/member.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="../../assets/img/faces/face-1.jpg" alt="..."/>
                                  <h4 class="title">Data Karyawan<br />
                                     <a href="#"><small>@member</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    Laporkan Kendala atau Kerusakan<br>
                                    Perangkat IT Anda di<br>
                                    SIMONKER
                                </p>
                            </div>
                        </div>
                        
                    </div>
				</div>				
<?php
	} else {
?>		

				<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="text-center">
											<div class="icon-big icon-danger text-center">
                                            <i class="ti-timer"></i>
											</div>
											<hr>
											<h3><b>Silahkan Tunggu</b></h3>
                                            <h3>
												<?php 
												if ($status==0){ echo "Laporan Kerusakan Anda Dalam Antrian"; } else 
												if ($status==1){ echo "Kerusakan Anda Sedang Diperbaiki"; } else 
												?>
											</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
	}
?>


