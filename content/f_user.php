`<?php 
include 'system/proses.php';
$connect = mysqli_connect("localhost", "root", "", "penggajian");
$query = "SELECT max(kode_petugas) as maxKode FROM petugas";
$hasil = mysqli_query($connect, $query);
$data = mysqli_fetch_array($hasil);
$kodebarang = $data['maxKode'];
$nourut = (int) substr($kodebarang, 5, 5);
$nourut++;
$char = "PTG";
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
							<a href="#">Pegawai</a>
						</li>
						
					</ol>
				</div>
				<h4 class="page-title">Petugas</h4>
			</div>
		</div>
	</div><!-- end page title end breadcrumb -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<h4 class="mt-0 header-title">Data Petugas</h4>
					<div class="col-sm-5">
						<form action="crud/simpan_petugas.php" method="POST" id="form-pegawai">
							<div class="form-group">
								<label for="nip" class="col-form-label" style="font-weight: normal;">Kode Petugas</label>
								<input type="text" class="form-control" id="nip" name="kode_petugas" value="<?php echo $nomot; ?>" readonly style="cursor: no-drop;">
							</div>

							<div class="form-group">
								<label for="nama" class="col-form-label" style="font-weight: normal;">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" required="" autocomplete="off">
							</div>
							
							<div class="form-group">
								<label for="tempat_lahir" class="col-form-label" style="font-weight: normal;">username</label>
								<input type="text" class="form-control" id="tempat_lahira" name="username" required="" autocomplete="off">
							</div>
                            <div class="form-group">
								<label for="tempat_lahir" class="col-form-label" style="font-weight: normal;">password</label>
								<input type="text" class="form-control" id="tempat_lahira" name="password" required="" autocomplete="off">
							</div>
							
                            <div class="form-group">
								<label for="tempat_lahir" class="col-form-label" style="font-weight: normal;">Status</label>
                                <select class="form-control" name="status" >
											<option disabled selected>Pilih</option>
											<option value="CEO">CEO</option>
											<option value="HRD">HRD</option>
                                            <option value="admin">admin</option>


										</select>							</div>
							
							
						

							
			
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

