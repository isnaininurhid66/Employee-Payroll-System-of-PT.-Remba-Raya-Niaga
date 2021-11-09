<?php
error_reporting(0); 
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
							<a href="#">jabatan</a>
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

					</div>
					<br>
					<a href="index.php?p=f_jabatan" class="btn btn-primary">Tambah Data</a>
					<br>
					<div class="form-inline">
						<form action="" method="POST">
							<input type="text" name="nama" placeholder="Masukkan Keyword Pencarian..." class="form-control" value="<?php echo $_POST['nama'] ?>" autocomplete="off"id="keyword">



							&nbsp;
							<button type="submit" name="cari" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp;Cari</button>
							&nbsp;
						
						</form>

						
						<br><br><br><br>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Kode Jabatan</th>
									<th>Nama Jabatan</th>
									<th>Gaji Pokok</th>
									<th>Tunjangan Jabatan</th>
									<th>Harian</th>	
									<th>Aksi</th>
								</tr>
							</thead>
							<?php 
                            include 'system/proses2.php';
							$jabatan = mysqli_query($koneksi, "SELECT * FROM jabatan ORDER BY kode_jabatan ;");
                            while ($tampil = mysqli_fetch_array($jabatan)) {
							?>
							
							
							
								<tr>
									<td><?php echo $tampil['kode_jabatan'] ?></td>
									<td><?php echo $tampil['nama_jabatan'] ?></td>
									<td>Rp.<?php echo number_format($tampil['gaji_pokok']) ?></td>
									<td>Rp.<?php echo number_format($tampil['tj_jabatan']) ?></td>
									<td>Rp.<?php echo number_format($tampil['harian']) ?></td>
									<td>
										<a href="crud/hapus_jabatan.php?id=<?php echo $tampil['kode_jabatan'] ?>" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>


										<a href="#myModal3" class="btn btn-warning" id="custId" data-toggle="modal" data-id="<?= $tampil['kode_jabatan']; ?>" style="color: #fff;"><i class="fa fa-pencil-alt"></i></a>


									</td>
								</tr>
							<?php  } ?>
							
							
						</table>
						
					</div>
				</div>
			</div><!-- end col -->
		</div><!-- end row -->
		
	</div><!-- end container -->



	<!-- Modal Edit -->
	<div class="modal fade" id="myModal3" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<h4 class="modal-tittle">
						Edit Jabatan
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="fatched-data3">

					</div>
				</div>

			</div>
		</div>
	</div>

