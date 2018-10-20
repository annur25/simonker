<?php

$id = $_GET['id'];
?>

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
</div>
<div class="modal-body">
Anda yakin ingin menghapus data ini ?
</div>
<div class="modal-footer">
<a href="?page=karyawan" class="btn btn-default">Batal</a>
<a id="mylink" href="file/delete_it_support.php?id=<?php echo $_GET['id']; ?>" type="submit" class="btn btn-primary">Hapus Data</a>
</div>