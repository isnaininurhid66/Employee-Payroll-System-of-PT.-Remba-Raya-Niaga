<?php 
include '../../system/proses.php';

$id = $_POST['rowid'];
$tampil = $db->get("*","pegawai","WHERE nip='$id'")->fetch();




?>
<form action="crud/simpan_pegawai.php" method="POST" id="form-pegawai">
	<div class="form-group">
		<label for="nip" class="col-form-label" style="font-weight: normal;">NIP</label>
		<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $tampil['nip']; ?>" readonly>
	</div>

	<div class="form-group">
		<label for="nama" class="col-form-label" style="font-weight: normal;">Nama Depan</label>
		<input type="text" class="form-control" id="nama" name="nama" required="" autocomplete="off" value="<?php echo $tampil['nama']; ?>">
	</div>
	<div class="form-group">
		<label for="nama2" class="col-form-label" style="font-weight: normal;">Nama Belakang</label>
		<input type="text" class="form-control" id="nama2" name="nama2" required="" autocomplete="off" value="<?php echo $tampil['nama2']; ?>">
	</div>
	<div class="form-group">
		<label for="tempat_lahir" class="col-form-label" style="font-weight: normal;">Tempat Lahir</label>
		<input type="text" class="form-control" id="tempat_lahira" name="tempat_lahir" required="" autocomplete="off" value="<?php echo $tampil['tempat_lahir']; ?>">
	</div>

	<div class="form-group">
		<label for="tanggal_lahir" class="col-form-label" style="font-weight: normal;">Tanggal Lahir</label>
		<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="" autocomplete="off" value="<?php echo $tampil['tanggal_lahir']; ?>">
	</div>
	
	<div class="form-group">
		<label for="jabatan" class="col-form-label" style="font-weight: normal;">Jabatan</label>
		<select class="form-control" name="jabatan" id="jabatan">
			<?php 
			$qr = $db->get("*","jabatan","ORDER BY kode_jabatan ASC");
			foreach($qr as $data):
				?>
				<option value="<?php echo $data['kode_jabatan'] ?>" <?php if($tampil['kode_jabatan']==$data['kode_jabatan']){echo "selected";} ?>><?php echo $data['nama_jabatan'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>

	


	<div class="row">
		<div class="col-sm-7">
			<div class="form-group">
				<label for="status" class="col-form-label" style="font-weight: normal;">Status</label>
				<select class="form-control" name="statuss" id="statuss" onchange="pilih_status()">
					<option disabled selected>Pilih</option>
					<option value="Menikah" <?php if($tampil['status']="Menikah"){echo "selected";} ?>>Menikah</option>
					<option value="Belum Menikah" <?php if($tampil['status']="Belum Menikah"){echo "selected";} ?>>Belum Menikah</option>


				</select>

			</div>

		</div>


		<div class="col-sm-5">
			<div class="form-group">
				<label for="anak" class="col-form-label" style="font-weight: normal;" id="lb_anak">Jumlah Anak</label>
				<select class="form-control" name="anak" id="anak">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>


				</select>
			</div>	
		</div>
		

		
	</div>

	
			<div class="form-group">
				<label for="cabang" class="col-form-label" style="font-weight: normal;" id="cabang">Cabang</label>
				<select class="form-control" name="cabang" id="cabang">
					<option value="Ruhmtech">Ruhmtech</option>
					<option value="CV.Ruhmtech">CV.Ruhmtech</option>
					<option value="PT.Ruhmtech">PT.Ruhmtech</option>


				</select>

			</div>
			<div class="form-group">
			<label for="tgl_gabung" class="col-form-label" style="font-weight: normal;">Tanggal Gabung</label>
			<input type="date" class="form-control" id="tgl_gabung" name="tgl_gabung" required="" autocomplete="off" value="<?php echo $tampil['tgl_gabung']; ?>">
		</div>
		<div class="form-group">
			<label for="nohp" class="col-form-label" style="font-weight: normal;">NO HP</label>
			<input type="number" class="form-control" id="nohp" name="nohp" required="" autocomplete="off" value="<?php echo $tampil['nohp']; ?>">
		</div>
		<div class="form-group">
			<label for="nowa" class="col-form-label" style="font-weight: normal;">NO Whatesapp</label>
			<input type="number" class="form-control" id="nowa" name="nowa" required="" autocomplete="off" value="<?php echo $tampil['nowa']; ?>">
		</div>
		<div class="form-group">
			<label for="norek" class="col-form-label" style="font-weight: normal;">NO Rekening</label>
			<input type="number" class="form-control" id="norek" name="norek" required="" autocomplete="off" value="<?php echo $tampil['norek']; ?>">
		</div>
		<div class="form-group">
			<label for="alamat" class="col-form-label" style="font-weight: normal;">Alamat</label>
			<textarea type="text" class="form-control" id="alamat" name="alamat" required="" autocomplete="off"><?php echo $tampil['alamat']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="kelurahan" class="col-form-label" style="font-weight: normal;">Kelurahan</label>
			<input type="text" class="form-control" id="kelurahan" name="kelurahan" required="" value="<?php echo $tampil['kelurahan']; ?>" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="kecamatan" class="col-form-label" style="font-weight: normal;">Kecamatan</label>
			<input type="text" class="form-control" id="nohp" name="kecamatan" required="" value="<?php echo $tampil['kecamatan']; ?>" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="kota" class="col-form-label" style="font-weight: normal;">Kota</label>
			<input type="text" class="form-control" id="kota" name="kota" required="" value="<?php echo $tampil['kota']; ?>" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="kode_pos" class="col-form-label" style="font-weight: normal;">kodepos</label>
			<input type="text" class="form-control" id="kode_pos" name="kode_pos" required="" value="<?php echo $tampil['kode_pos']; ?>" autocomplete="off" >
		</div>
	<input type="submit" name="edit" class="btn btn-primary" value="Simpan">

</form>