			<div class="row">
			<div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Karyawan</h4><hr>
                            </div>
                            <div class="content">
                                <form method="POST" action="file/insert_karyawan.php">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NIK</label>
                                                <input type="text" class="form-control border-input" name="nik" placeholder="1234xxxxxxxxxxxx" maxlength="6" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control border-input" name="nm" placeholder="Nama Lengkap" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control border-input" name="email" placeholder="coba@gmail.com"  required/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No Telepon</label>
                                                <input type="text" class="form-control border-input" name="telp" placeholder="08xxxxxxxxxx" maxlength="12" required/>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea rows="4" class="form-control border-input" placeholder="Alamat Lengkap" name="alamat" required></textarea>
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
		<div class="row">
                    <div class="col-lg-12">
						<div class="card" style="padding:15px;">
                                <table id="tabel-data" class="table table-bordered table-hover" width="100%" cellspacing="0" width="100%" cellspacing="0">
                                    <thead>
										<tr>
										<th>No</th>
                                        <th>NIK</th>
                                    	<th>Nama Lengkap</th>
                                    	<th>E-mail</th>
                                    	<th>No Telepon</th>
										<th>Aksi</th>
										</tr>
                                    </thead>
                                    <tbody>
<?php
include('../../assets/config/config.php');
$query1 = mysql_query("SELECT * FROM karyawan ORDER BY nama_karyawan ASC");
$no=1;
while ($k = mysql_fetch_array($query1)) {
?>																	
 										<tr>
                                        	<td><?php echo $no; ?></td>
                                        	<td><?php echo $k['nik_karyawan']; ?></td>
                                        	<td><?php echo $k['nama_karyawan']; ?></td>
                                        	<td><?php echo $k['email']; ?></td>
                                        	<td><?php echo $k['no_telp']; ?></td>
											<td>
											<a href="file/hapus_karyawan.php?id=<?php echo $k['nik_karyawan'];?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delMember"><span class="ti-trash"></span> Hapus</a>
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
	
<!-- Modal Hapus Data -->
<div class="modal fade" id="delMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            
        </div>
    </div>
</div>				


