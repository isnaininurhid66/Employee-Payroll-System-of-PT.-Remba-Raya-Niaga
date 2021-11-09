`<?php 
include 'system/proses.php';
$connect = mysqli_connect("localhost", "root", "", "penggajian");
$query = "SELECT max(nip) as maxKode FROM pegawai";
$hasil = mysqli_query($connect, $query);
$data = mysqli_fetch_array($hasil);
$kodebarang = $data['maxKode'];
$nourut = (int) substr($kodebarang, 5, 5);
$nourut++;
$char = "186";
$nomot = $char . sprintf("%05s", $nourut);
?>







<div class="container-fluid"><!-- Page-Title -->
	<div class="row">
		<div class="col-sm-12">
			<div class="page-title-box">
				<div class="btn-group float-right">
					<ol class="breadcrumb hide-phone p-0 m-0">
						<li class="breadcrumb-item">
							<a href="#">Drixo</a>
						</li>
						<li class="breadcrumb-item">
							<a href="#">Master</a>
						</li>
						<li class="breadcrumb-item active">
							<a href="#">Karyawan</a>
						</li>
						
					</ol>
				</div>
				<h4 class="page-title">Karyawan</h4>
			</div>
		</div>
	</div><!-- end page title end breadcrumb -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<h4 class="mt-0 header-title">Data Karyawan</h4>
					<div class="col-sm-5">
						<form action="crud/simpan_pegawai.php" method="POST" id="form-pegawai">
							<div class="form-group">
								<label for="nip" class="col-form-label" style="font-weight: normal;">NIP</label>
								<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $nomot; ?>" readonly style="cursor: no-drop;">
							</div>

							<div class="form-group">
								<label for="nama" class="col-form-label" style="font-weight: normal;">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" required="" autocomplete="off">
								<input type="hidden" class="form-control" id="golongan" name="golongan" value="GOL005" required="" autocomplete="off">
								<input type="hidden" class="form-control" id="absen" name="absen" value="0" required="" autocomplete="off">

							</div>
							<div class="form-group">
		<label for="nama2" class="col-form-label" style="font-weight: normal;">Nama Belakang</label>
		<input type="text" class="form-control" id="nama2" name="nama2" required="" autocomplete="off">
	</div>
							<div class="form-group">
								<label for="tempat_lahir" class="col-form-label" style="font-weight: normal;">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat_lahira" name="tempat_lahir" required="" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="tanggal_lahir" class="col-form-label" style="font-weight: normal;">Tanggal Lahir</label>
								<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="jabatan" class="col-form-label" style="font-weight: normal;">Jabatan</label>
								<select class="form-control" name="jabatan" id="jabatan">
									<?php 
									$qr = $db->get("*","jabatan","ORDER BY kode_jabatan ASC");
									foreach($qr as $data):
										?>
										<option value="<?php echo $data['kode_jabatan'] ?>"><?php echo $data['nama_jabatan'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>

							<!-- <div class="form-group">
								<label for="golongan" class="col-form-label" style="font-weight: normal;">Golongan</label>
								<select class="form-control" name="golongan" id="golongan">
									<?php 
									$qr = $db->get("*","golongan","ORDER BY kode_golongan ASC");
									foreach($qr as $data):
										?>
										<option value="<?php echo $data['kode_golongan'] ?>"><?php echo $data['golongan'] ?></option>
									<?php endforeach; ?>
								</select>
							</div> -->

							
							<div class="row">
								<div class="col-sm-7">
									<div class="form-group">
										<label for="status" class="col-form-label" style="font-weight: normal;">Status</label>
										<select class="form-control" name="statuss" id="statuss" onchange="pilih_status()">
											<option disabled selected>Pilih</option>
											<option value="Menikah">Menikah</option>
											<option value="Belum Menikah">Belum Menikah</option>


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
					<option value="VIKA 1 PONDOK KELAPA">VIKA 1 PONDOK KELAPA</option>
					<option value="VIKA 2 PONDOK KELAPA">VIKA 2 PONDOK KELAPA</option>
					<option value="VIKA PRIUK">VIKA PRIUK</option>
					<option value="VIKA JATIASIH">VIKA JATIASIH</option>
					<option value="LERENG LAWU BEKASI">LERENG LAWU BEKASI</option>
					<option value="LERENG LAWU BINTARA">LERENG LAWU BINTARA</option>
					<option value="LERENG LAWU CIBARUSAH">LERENG LAWU CIBARUSAH</option>

					

				</select>

			</div>
			<div class="form-group">
			<label for="tgl_gabung" class="col-form-label" style="font-weight: normal;">Tanggal Gabung</label>
			<input type="date" class="form-control" id="tgl_gabung" name="tgl_gabung" required="" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="nohp" class="col-form-label" style="font-weight: normal;">NO HP</label>
			<input type="number" class="form-control" id="nohp" name="nohp" required="" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="nowa" class="col-form-label" style="font-weight: normal;">NO Whatesapp</label>
			<input type="number" class="form-control" id="nowa" name="nowa" required="" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="norek" class="col-form-label" style="font-weight: normal;">NO Rekening</label>
			<input type="number" class="form-control" id="norek" name="norek" required="" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="alamat" class="col-form-label" style="font-weight: normal;">Alamat</label>
			<textarea type="text" class="form-control" id="alamat" name="alamat" required="" autocomplete="off"></textarea>
		</div>
		<div class="form-group">
			<label for="kelurahan" class="col-form-label" style="font-weight: normal;">Kelurahan</label>
			<input type="text" class="form-control" id="kelurahan" name="kelurahan" required="" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="kecamatan" class="col-form-label" style="font-weight: normal;">Kecamatan</label>
			<input type="text" class="form-control" id="nohp" name="kecamatan" required="" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="kota" class="col-form-label" style="font-weight: normal;">Kota</label>
			<input type="text" class="form-control" id="kota" name="kota" required="" autocomplete="off" >
		</div>
		<div class="form-group">
			<label for="kode_pos" class="col-form-label" style="font-weight: normal;">Kode Pos</label>
			<input type="text" class="form-control" id="kode_pos" name="kode_pos" required="" autocomplete="off" >
		</div>
							<input type="submit" name="submit" class="btn btn-primary" value="Simpan">

						</form>
					</div>
					<br>
					
					
				</div>
			</div>
		</div><!-- end col -->
	</div><!-- end row -->
	
</div><!-- end container -->



<!-- Modal Edit -->

