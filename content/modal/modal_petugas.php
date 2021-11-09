<?php 
include '../../system/proses.php';

$id = $_POST['rowid'];
$tampil = $db->get("*","petugas","WHERE kode_petugas='$id'")->fetch();




?>
<form action="crud/simpan_petugas.php" method="POST" id="form-gol">
	<div class="form-group">
		<label for="kode_petugas" class="col-form-label" style="font-weight: normal;">Kode Petugas</label>
		<input type="text" class="form-control" id="kode_petugas" name="kode_petugas" value="<?php echo $tampil['kode_petugas']; ?>" readonly>
	</div>

	<div class="form-group">
		<label for="nama" class="col-form-label" style="font-weight: normal;">Nama Petugas</label>
		<input type="text" class="form-control" id="nama" name="nama" required="" autocomplete="off" value="<?php echo $tampil['nama']; ?>">
        <input type="hidden" class="form-control" id="username" name="username" required="" autocomplete="off" value="<?php echo $tampil['username']; ?>">
		<input type="hidden" class="form-control" id="password" name="password" required="" autocomplete="off" value="<?php echo $tampil['password']; ?>">

	</div>
    <div class="form-group">
		<label for="status" class="col-form-label" style="font-weight: normal;">Jabatan</label>
        <select class="form-control" name="status" id="anak">
					<option value="<?php echo $tampil['status']; ?>"><?php echo $tampil['status']; ?></option>
					<option value="CEO">CEO</option>
					<option value="HRD">HRD</option>
                    <option value="admin">admin</option>
				</select>	</div>
    
	


	<input type="submit" name="edit" class="btn btn-primary" value="Simpan">

</form>