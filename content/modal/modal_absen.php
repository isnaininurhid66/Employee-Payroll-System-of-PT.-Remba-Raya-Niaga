<?php 
include '../../system/proses.php';

$id = $_POST['rowid'];
$tampil = $db->get("*","pegawai","WHERE nip='$id'")->fetch();




?>
<form action="crud/simpan_absen.php" method="POST" id="form-pegawai">
	<div class="form-group">
		<label for="nip" class="col-form-label" style="font-weight: normal;">NIP</label>
		<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $tampil['nip']; ?>" readonly>
	</div>

	<div class="form-group">
		<label for="nama" class="col-form-label" style="font-weight: normal;">Nama</label>
		<input type="text" class="form-control" id="nama" name="nama" required="" autocomplete="off" readonly value="<?php echo $tampil['nama']; ?>">
	</div>

	<div class="form-group">
		<label for="tempat_lahir" class="col-form-label" style="font-weight: normal;">Absen Kehadiran </label>
		<input type="text" class="form-control" id="absen" name="absen" required="" autocomplete="off" value="<?php echo $tampil['absen']; ?>">
	</div>

	
	<input type="submit" name="edit" class="btn btn-primary" value="Simpan">

</form>