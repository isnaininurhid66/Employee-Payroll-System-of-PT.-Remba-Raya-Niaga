`<?php 
include 'system/proses.php';
$connect = mysqli_connect("localhost", "root", "", "penggajian");
$query = "SELECT max(kode_golongan) as maxKode FROM golongan";
$hasil = mysqli_query($connect, $query);
$data = mysqli_fetch_array($hasil);
$kodebarang = $data['maxKode'];
$nourut = (int) substr($kodebarang, 3, 3);
$nourut++;
$char = "GOL";
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
							<a href="#">Golongan</a>
						</li>
						
					</ol>
				</div>
				<h4 class="page-title">Golongan</h4>
			</div>
		</div>
	</div><!-- end page title end breadcrumb -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<h4 class="mt-0 header-title">Data Golongan</h4>
					<div class="col-sm-5">
						<form action="crud/simpan_gol.php" method="POST" id="form-pegawai">
							<div class="form-group">
								<label for="kode_golongan" class="col-form-label" style="font-weight: normal;">Kode Golongan</label>
								<input type="text" class="form-control" id="kode_golongan" name="kode_golongan" value="<?php echo $nomot; ?>"  readonly style="cursor: no-drop;">
							</div>

							<div class="form-group">
		<label for="golongan" class="col-form-label" style="font-weight: normal;">Nama Golongan</label>
		<input type="text" class="form-control" id="golongan" name="golongan" required="" autocomplete="off" >
	</div>
    <div class="form-group">
		<label for="tj_suami_istri" class="col-form-label" style="font-weight: normal;">Tunjangan Suami/Istri</label>
		<input type="number" class="form-control" id="tj_suami_istri" name="tj_suami_istri" required="" autocomplete="off" >
	</div>
    <div class="form-group">
		<label for="tj_anak" class="col-form-label" style="font-weight: normal;">Tunjangan Anak</label>
		<input type="number" class="form-control" id="tj_anak" name="tj_anak" required="" autocomplete="off" >
	</div>
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

