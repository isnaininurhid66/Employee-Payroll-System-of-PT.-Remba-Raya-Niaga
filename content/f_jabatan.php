`<?php 
include 'system/proses.php';
$connect = mysqli_connect("localhost", "root", "", "penggajian");
$query = "SELECT max(kode_jabatan) as maxKode FROM jabatan";
$hasil = mysqli_query($connect, $query);
$data = mysqli_fetch_array($hasil);
$kodebarang = $data['maxKode'];
$nourut = (int) substr($kodebarang, 3, 3);
$nourut++;
$char = "JBT";
$nomot = $char . sprintf("%03s", $nourut);
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
							<a href="#">jabtaan</a>
						</li>
						
					</ol>
				</div>
				<h4 class="page-title">Jabatan</h4>
			</div>
		</div>
	</div><!-- end page title end breadcrumb -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<h4 class="mt-0 header-title">Data Jabatan</h4>
					<div class="col-sm-5">
						<form action="crud/simpan_jab.php" method="POST" id="form-jabatan">
							<div class="form-group">
								<label for="kode_jabatan" class="col-form-label" style="font-weight: normal;">Kode Jabatan</label>
								<input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" value="<?php echo $nomot; ?>"  readonly style="cursor: no-drop;">
							</div>

							
                            <div class="form-group">
		<label for="nama_jabatan" class="col-form-label" style="font-weight: normal;">Nama Jabatan</label>
		<input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" required="" autocomplete="off" >
	</div>
    <div class="form-group">
		<label for="gaji_pokok" class="col-form-label" style="font-weight: normal;">Gaji Pokok</label>
		<input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" required="" autocomplete="off">
	</div>
    <div class="form-group">
		<label for="tj_jabatan" class="col-form-label" style="font-weight: normal;">Tunjangan Jabatan</label>
		<input type="number" class="form-control" id="tj_jabatan" name="tj_jabatan" required="" autocomplete="off">
	</div>
	<div class="form-group">
		<label for="harian" class="col-form-label" style="font-weight: normal;">Harian (Gapok:26H)</label>
		<input type="number" class="form-control" id="harian" name="harian" required="" autocomplete="off">
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

