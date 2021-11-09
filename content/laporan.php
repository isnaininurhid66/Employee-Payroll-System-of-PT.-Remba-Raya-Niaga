<?php 
error_reporting(0);
include 'system/proses.php';
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
							<a href="#">Laporan</a>
						</li>

					</ol>
				</div>
				<h4 class="page-title">Laporan</h4>
			</div>
		</div>
	</div><!-- end page title end breadcrumb -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<h4 class="mt-0 header-title">Data Laporan</h4>

					<div class="col-sm-9">
						<div class="form-inline">
							<form action="" method="POST">
								<select name="bulan" id="bulan" class="form-control">
									<option disabled selected>Pilih Bulan</option>
									<option <?php if($_POST['bulan']=="01"){echo "selected";} ?> value="01">Januari</option>
									<option <?php if($_POST['bulan']=="02"){echo "selected";} ?> value="02" >Februari</option>
									<option <?php if($_POST['bulan']=="03"){echo "selected";} ?>  value="03" >Maret</option>
									<option <?php if($_POST['bulan']=="04"){echo "selected";} ?> value="04" >April</option>
									<option <?php if($_POST['bulan']=="05"){echo "selected";} ?> value="05" >Mei</option>
									<option <?php if($_POST['bulan']=="06"){echo "selected";} ?> value="06" >Juni</option>
									<option <?php if($_POST['bulan']=="07"){echo "selected";} ?> value="07" >Juli</option>
									<option <?php if($_POST['bulan']=="08"){echo "selected";} ?> value="08" >Agustus</option>
									<option <?php if($_POST['bulan']=="09"){echo "selected";} ?> value="09" >September</option>
									<option <?php if($_POST['bulan']=="10"){echo "selected";} ?> value="10" >Oktober</option>
									<option <?php if($_POST['bulan']=="11"){echo "selected";} ?> value="11" >November</option>
									<option <?php if($_POST['bulan']=="12"){echo "selected";} ?> value="12" >Desember</option>
								</select>

								
								<select name="tahun" id="tahun" class="form-control" style="width: 200px;">
									<option disabled selected>Pilih Tahun</option>
									<?php 
									$qr = $db->get("tanggal","gaji"," GROUP BY DATE_FORMAT(tanggal, '%Y')");
									while($d=$qr->fetch()) :
										$data = explode('-', $d['tanggal']);
										$tahun = $data[0];
										?>

										<option value="<?php echo $tahun; ?>"> <?php if($_POST['tahun']=="2019"){echo "selected";} ?><?php echo $tahun; ?></option>
									<?php endwhile; ?>
								</select>
								<select class="form-control" name="nip" id="nip">
								<option disabled selected>Pilih Pegawai</option>

									<?php 
									$qr = $db->get("*","pegawai","ORDER BY nip ASC");
									foreach($qr as $data):
										?>
										<option value="<?php echo $data['nip'] ?>"><?php echo $data['nama'] ?></option>
									<?php endforeach; ?>
								</select>
								&nbsp;
								<button type="submit" name="cari" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp;Cari</button>
								&nbsp;
								<!-- <button type="button" class="btn btn-warning"  data-action="exportExcel" onclick="saveAsExcel('laporan', 'laporanGaji.xls')">
                        <i class="fa fa-download"></i> Export Excel
                    </button> -->
					<a type="button" class="btn btn-warning" href="gaji.php" target="_blank">
                        <i class="fa fa-download"></i> Export PDF
                    </a>
							</form>
							
						</div>
					</div>


					<br>
					<table class="table table-hover table-bordered" id="laporan" border="2px">
						<tr>
							<th>No</th>
							<th>No Slip</th>
							<th>Nama</th>
							<th>Tanggal</th>
							<th>Jabatan</th>
							<th>Tunjangan Jabatan</th>
						
							<th>Gaji Kotor</th>
							<th>Gaji Bersih</th>
						</tr>
						<?php
						
						if(isset($_POST['cari'])){
							$bulan = $_POST['bulan'];
							$tahun = $_POST['tahun'];
							$nip = $_POST['nip'];
							$qr = $db->get("gaji.no_slip,gaji.Tanggal,pegawai.nama,pegawai.nip,jabatan.nama_jabatan,jabatan.tj_jabatan,golongan.tj_anak,golongan.tj_suami_istri,gaji.potongan,gaji.gaji_bersih","gaji","INNER JOIN pegawai ON gaji.nip=pegawai.nip INNER JOIN jabatan ON jabatan.kode_jabatan=pegawai.kode_jabatan INNER JOIN golongan on pegawai.kode_golongan=golongan.kode_golongan WHERE month(gaji.tanggal) = '$bulan' AND year(gaji.tanggal)='$tahun' AND (pegawai.nip)='$nip'");
						}else{
							$qr = $db->get("gaji.no_slip,gaji.Tanggal,pegawai.nama,pegawai.nip,jabatan.nama_jabatan,jabatan.tj_jabatan,golongan.tj_anak,golongan.tj_suami_istri,gaji.potongan,gaji.gaji_bersih","gaji","INNER JOIN pegawai ON gaji.nip=pegawai.nip INNER JOIN jabatan ON jabatan.kode_jabatan=pegawai.kode_jabatan INNER JOIN golongan on pegawai.kode_golongan=golongan.kode_golongan");
						}
						
						?>
						<?php 
						$no=1;
						foreach($qr as $tampil):
							
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $tampil['no_slip'] ?></td>
								<td><?php echo $tampil['nama'] ?></td>
								<td><?php echo $tampil['Tanggal'] ?></td>
								<td><?php echo $tampil['nama_jabatan'] ?></td>
								<td><?php echo number_format($tampil['tj_jabatan'], 0, ".", ".") ?></td>
								<td><?php echo number_format($tampil['potongan'], 0, ".", ".") ?></td>
								<td><?php echo number_format($tampil['gaji_bersih'], 0, ".", ".") ?></td>
							</tr>

							<?php
							$no++; 
						endforeach;
						?>
							<tr>
								<?php 
									$gajiSemua = $db->ambil("SUM(potongan) AS ppn, SUM(gaji_bersih) AS gj_bersih","gaji")->fetch();
								 ?>
								
								
								<td colspan="6">
									<center>
										<label style="font-weight: bold;">Total</label>
									</center>
								</td>
								<td><label style="font-weight: bold;"><?= number_format($gajiSemua['ppn'], 0, ".", ".") ?></label></td>
								<td><label style="font-weight: bold;"><?= number_format($gajiSemua['gj_bersih'], 0, ".", ".") ?></label></td>
							</tr>

					</table>
					<br>


				</div>
			</div>
		</div><!-- end col -->
	</div><!-- end row -->

</div><!-- end container -->
<script type="text/javascript">
	function cetak(){
		bulan = $('#bulan').val();
		tahun = $('#tahun').val();

		window.open("content/print_laporan.php?bulan="+bulan+"&"+"tahun="+tahun);
	}
</script>