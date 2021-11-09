<?php 
include '../../system/proses.php';

$id = $_POST['rowid'];
$tampil = $db->get("*","jabatan","WHERE kode_jabatan='$id'")->fetch();




?>
<form action="crud/simpan_jab.php" method="POST" id="form-gol">
	<div class="form-group">
		<label for="kode_jabatan" class="col-form-label" style="font-weight: normal;">Kode Jabatan</label>
		<input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" value="<?php echo $tampil['kode_jabatan']; ?>" readonly>
	</div>

	<div class="form-group">
		<label for="nama_jabatan" class="col-form-label" style="font-weight: normal;">Nama Jabatan</label>
		<input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" required="" autocomplete="off" value="<?php echo $tampil['nama_jabatan']; ?>">
	</div>
    <div class="form-group">
		<label for="gaji_pokok" class="col-form-label" style="font-weight: normal;">Gaji Pokok</label>
		<input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" required="" autocomplete="off" value="<?php echo $tampil['gaji_pokok']; ?>">
	</div>
    <div class="form-group">
		<label for="tj_jabatan" class="col-form-label" style="font-weight: normal;">Tunjangan Jabatan</label>
		<input type="number" class="form-control" id="tj_jabatan" name="tj_jabatan" required="" autocomplete="off" value="<?php echo $tampil['tj_jabatan']; ?>">
	</div>
	<div class="form-group">
	<label for="harian" class="col-form-label" style="font-weight: normal;">Harian (Gapok:26H)</label>
		<input type="number" class="form-control" id="harian" name="harian" required="" autocomplete="off" value="<?php echo $tampil['harian']; ?>">
	</div>


	<input type="submit" name="edit" class="btn btn-primary" value="Simpan">

</form>