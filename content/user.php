<?php
error_reporting(0); 
include 'system/proses.php';
$connect = mysqli_connect("localhost", "root", "", "penggajian");
$query = "SELECT max(kode_petugas) as maxKode FROM petugas";
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
							<a href="#">petugas</a>
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

					</div>
					<br>
					<a href="index.php?p=f_user" class="btn btn-primary">Tambah Data</a>
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
									<th>Kode Petugas</th>
									<th>Nama Petugas</th>
									<th>Username</th>
									<th>Password</th>
									<th>Status</th>	
									<th>Aksi</th>
								</tr>
							</thead>
							<?php 
                            include 'system/proses2.php';
							$petugas = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY kode_petugas ;");
                            while ($tampil = mysqli_fetch_array($petugas)) {
							?>
							
							
							
								<tr>
                                    <td><?php echo $tampil['kode_petugas'] ?></td>
									<td><?php echo $tampil['nama'] ?></td>
									<td><?php echo $tampil['username'] ?></td>
                                    <td><?php echo $tampil['password'] ?></td>
									<td><?php echo $tampil['status'] ?></td>

									
									<td>
										<a href="crud/hapus_petugas.php?id=<?php echo $tampil['kode_petugas'] ?>" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>


										<a href="#myModal5" class="btn btn-warning" id="custId" data-toggle="modal" data-id="<?= $tampil['kode_petugas']; ?>" style="color: #fff;"><i class="fa fa-pencil-alt"></i></a>


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
	<div class="modal fade" id="myModal5" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<h4 class="modal-tittle">
						Edit Petugas
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="fatched-data5">

					</div>
				</div>

			</div>
		</div>
	</div>

