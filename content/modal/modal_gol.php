<?php 
include '../../system/proses.php';

$id = $_POST['rowid'];
$tampil = $db->get("*","golongan","WHERE kode_golongan='$id'")->fetch();




?>
<form action="crud/simpan_gol.php" method="POST" id="form-gol">
	<div class="form-group">
		<label for="kode_golongan" class="col-form-label" style="font-weight: normal;">Kode Golongan</label>
		<input type="text" class="form-control" id="kode_golongan" name="kode_golongan" value="<?php echo $tampil['kode_golongan']; ?>" readonly>
	</div>

	<div class="form-group">
		<label for="golongan" class="col-form-label" style="font-weight: normal;">Nama Golongan</label>
		<input type="text" class="form-control" id="golongan" name="golongan" required="" autocomplete="off" value="<?php echo $tampil['golongan']; ?>">
	</div>
    <div class="form-group">
		<label for="tj_suami_istri" class="col-form-label" style="font-weight: normal;">Tunjangan Suami/Istri</label>
		<input type="number" class="form-control" id="tj_suami_istri" name="tj_suami_istri" required="" autocomplete="off" value="<?php echo $tampil['tj_suami_istri']; ?>">
	</div>
    <div class="form-group">
		<label for="tj_anak" class="col-form-label" style="font-weight: normal;">Tunjangan Anak</label>
		<input type="number" class="form-control" id="tj_anak" name="tj_anak" required="" autocomplete="off" value="<?php echo $tampil['tj_anak']; ?>">
	</div>


	<input type="submit" name="edit" class="btn btn-primary" value="Simpan">

</form>