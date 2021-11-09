<div class="container-fluid"><!-- Page-Title -->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-title-box">
						<div class="btn-group float-right">
							<ol class="breadcrumb hide-phone p-0 m-0">
								<li class="breadcrumb-item">
									<a href="#">Drixo</a>
								</li>
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div>
						<h4 class="page-title">Dashboard</h4>
					</div>
				</div>
			</div><!-- end page title end breadcrumb -->
			<div class="row">
				<!-- <div class="col-xl-3 col-md-6">
					<div class="card mini-stat m-b-30">
						<div class="p-3 bg-primary text-white">
							<div class="mini-stat-icon">
								<i class="mdi mdi-cube-outline float-right mb-0"></i>
							</div>
							<h6 class="text-uppercase mb-0">New Orders</h6>
						</div>
						<div class="card-body">
							<div class="border-bottom pb-4">
								<span class="badge badge-success">+11% </span>
								<span class="ml-2 text-muted">From previous period</span>
							</div>
							<div class="mt-4 text-muted">
								<div class="float-right">
									<p class="m-0">Last : 1325</p>
								</div>
								<h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i>
								</h5>
							</div>
						</div>
					</div>
				</div> -->
				<div class="col-xl-3 col-md-6">
					<div class="card mini-stat m-b-30">
						<div class="p-3 bg-primary text-white">
							<div class="mini-stat-icon">
								<i class="mdi mdi-account-network float-right mb-0">
									
								</i>
							</div>
							<h6 class="text-uppercase mb-0">Jumlah Pegawai</h6>
						</div><div class="card-body">
							
							<div class="mt-4 text-muted">
								<!-- <div class="float-right">
									<p class="m-0">Last : 3426</p>
								</div> -->
								<h5 class="m-0"><?php echo $pegawai; ?>
									<i class="mdi mdi-arrow-up text-success ml-2"></i>
								</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
				
					<div class="card mini-stat m-b-30">
						<div class="p-3 bg-primary text-white">
							<div class="mini-stat-icon">
								<i class="mdi mdi-account-network float-right mb-0">
									
								</i>
							</div>
							<h6 class="text-uppercase mb-0">Total Gaji Pegawai</h6>
						</div><div class="card-body">
							
							<div class="mt-4 text-muted">
								<!-- <div class="float-right">
									<p class="m-0">Last : 3426</p>
								</div> -->
								<?php
                  
                 $pinjaman = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji ");
              
                 $p2 = mysqli_fetch_assoc($pinjaman);
                 {

                
                
                
                ?>
								<h5 class="m-0">Rp.<?php echo addslashes(number_format($p2['total'], 0, ".", "."));?>
									<i class="mdi mdi-arrow-up text-success ml-2"></i>
								</h5>
								<?php
                  }
                  ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card mini-stat m-b-30">
						<div class="p-3 bg-primary text-white">
							<div class="mini-stat-icon">
								<i class="mdi mdi-account-network float-right mb-0">
									
								</i>
							</div>
							<h6 class="text-uppercase mb-0">Jumlah Jabatan</h6>
						</div><div class="card-body">
							
							<div class="mt-4 text-muted">
								<!-- <div class="float-right">
									<p class="m-0">Last : 3426</p>
								</div> -->
								<h5 class="m-0"><?php echo $jabatan; ?>
									<i class="mdi mdi-arrow-up text-success ml-2"></i>
								</h5>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-3 col-md-6">
					<div class="card mini-stat m-b-30">
						<div class="p-3 bg-primary text-white">
							<div class="mini-stat-icon">
								<i class="mdi mdi-tag-text-outline float-right mb-0"></i>
							</div>
							<h6 class="text-uppercase mb-0">Average Price</h6>
						</div>
						<div class="card-body">
							<div class="border-bottom pb-4">
								<span class="badge badge-danger">-02% </span>
								<span class="ml-2 text-muted">From previous period</span>
							</div>
							<div class="mt-4 text-muted">
								<div class="float-right">
									<p class="m-0">Last : 15.8</p>
								</div>
								<h5 class="m-0">14.5
									<i class="mdi mdi-arrow-down text-danger ml-2"></i>
								</h5>
							</div>
						</div>
					</div>
				</div>


				<div class="col-xl-3 col-md-6">
					<div class="card mini-stat m-b-30">
						<div class="p-3 bg-primary text-white">
							<div class="mini-stat-icon">
								<i class="mdi mdi-cart-outline float-right mb-0"></i>
							</div>
							<h6 class="text-uppercase mb-0">Total Sales</h6>
						</div>
						<div class="card-body">
							<div class="border-bottom pb-4">
								<span class="badge badge-success">+10% </span>
								<span class="ml-2 text-muted">From previous period</span>
							</div>
							<div class="mt-4 text-muted">
								<div class="float-right">
									<p class="m-0">Last : 14256</p>
								</div>
								<h5 class="m-0">15234
									<i class="mdi mdi-arrow-up text-success ml-2">
										
									</i>
								</h5>
							</div>
						</div>
					</div>
				</div> -->
			</div><!-- end row --><!-- end row -->
			
				<!-- end row -->
				<div class="row">
				<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
					</div>
					<!-- end row -->
					
					<!-- end row -->
			
			
		</div><!-- end container -->

		<script>
		function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$pinjaman = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=01 ");
					$p1 = mysqli_fetch_assoc($pinjaman);
					echo $p1['total'];
					?>, 
					<?php 
					$pinjaman2 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=02 ");
					$p2 = mysqli_fetch_assoc($pinjaman2);
					echo $p2['total'];
					?>,
					<?php 
					$pinjaman3 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=03 ");
					$p3 = mysqli_fetch_assoc($pinjaman3);
					echo $p3['total'];
					?>,
					<?php 
					$pinjaman4 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=04 ");
					$p4 = mysqli_fetch_assoc($pinjaman4);
					echo $p4['total'];
					?>, 
					<?php 
					$pinjaman5 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=05 ");
					$p5 = mysqli_fetch_assoc($pinjaman5);
					echo $p5['total'];
					?>,
					<?php 
					$pinjaman6 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=06 ");
					$p6 = mysqli_fetch_assoc($pinjaman6);
					echo $p6['total'];
					?>,
					<?php 
					$pinjaman7 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=07 ");
					$p7 = mysqli_fetch_assoc($pinjaman7);
					echo $p7['total'];
					?>,
					<?php 
					$pinjaman8 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=08 ");
					$p8 = mysqli_fetch_assoc($pinjaman8);
					echo $p8['total'];
					?>,
					<?php 
					$pinjaman9 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=09 ");
					$p9 = mysqli_fetch_assoc($pinjaman9);
					echo $p9['total'];
					?>,
					<?php 
					$pinjaman10 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=10 ");
					$p10 = mysqli_fetch_assoc($pinjaman10);
					echo $p10['total'];
					?>,
					<?php 
					$pinjaman11 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=11 ");
					$p11 = mysqli_fetch_assoc($pinjaman11);
					echo $p11['total'];
					?>,
					<?php 
					$pinjaman12 = mysqli_query($koneksi, "SELECT sum(gaji_bersih) as total FROM gaji where month(tanggal)=12 ");
					$p12 = mysqli_fetch_assoc($pinjaman12);
					echo $p12['total'];
					?>,
					
					],

					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
				
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>


	