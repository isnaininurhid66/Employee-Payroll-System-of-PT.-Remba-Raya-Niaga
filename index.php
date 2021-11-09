<?php 
session_start();
if(!isset($_SESSION["namap_ptg"])){
		header("Location: login.php");
		exit;
	}
 ?>
 <?php
//including the database koneksi file
include 'system/proses2.php';
//fetching data in descending order (lastest entry first)
$pegawai = mysqli_query($mysqli, "SELECT * FROM pegawai  ");
$pegawai = mysqli_num_rows($pegawai);

$jabatan = mysqli_query($mysqli, "SELECT * FROM jabatan  ");
$jabatan = mysqli_num_rows($jabatan);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Penggajian</title>
	<link rel="shortcut icon" href="assets/images/favicon.ico"><!-- Alertify css -->
	<link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free/css/all.css">
	<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<script type="text/javascript" src="assets/chartjs/Chart.js"></script>
<script type="text/javascript" src="assets/saveAsExcel.js"></script>


</head>
<body>
	<!-- Loader -->
	<!-- <div id="preloader">
		<div id="status">
			<div class="spinner">
				
			</div>
		</div>
	</div> -->





	<header id="topnav">
		<div class="topbar-main">
			<div class="container-fluid">
				<!-- Logo container-->
				<div class="logo"><!-- Image Logo --> 
					<a href="index.php" class="logo">
						<img src="assets/images/jenid.png" alt="" height="50" class="logo-small"> 
						<img src="assets/images/jenid.png" alt="" height="50" class="logo-large">
					</a>
				</div><!-- End Logo container-->
				<div class="menu-extras topbar-custom">
					<ul class="list-inline float-right mb-0"><!-- Messages-->






						<li class="list-inline-item dropdown notification-list">
							
							<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-animated dropdown-menu-lg"><!-- item-->

								
								<div class="slimscroll" style="max-height: 230px;"><!-- item--> 
									<!-- item--> 
									




									




									
								</div><!-- All--> 
							</div>










						</li>
						





						<li class="list-inline-item dropdown notification-list">
							<p class="float-left" style="color: #fff; font-family: segoe ui; font-size: 20px; margin-top: 15px;" ><?php echo $_SESSION['namap_ptg'] ?></p>
							<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

								<img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
								<a class="dropdown-item" href="#">
									<i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile
								</a> 

								
								<a class="dropdown-item" href="logout.php">
									<i class="mdi mdi-logout m-r-5 text-muted">
										
									</i> 
									Logout
								</a>
							</div>
						</li>






						<li class="menu-item list-inline-item"><!-- Mobile menu toggle--> 
							<a class="navbar-toggle nav-link">
								<div class="lines">
									<span></span> 
									<span></span> 
									<span></span>
								</div>
							</a><!-- End mobile menu toggle-->
						</li>
					</ul>
				</div><!-- end menu-extras -->





				<div class="clearfix">
					
				</div>
			</div><!-- end container -->
		</div><!-- end topbar-main --><!-- MENU Start -->




		<div class="navbar-custom">
			<div class="container-fluid">
				<div id="navigation"><!-- Navigation Menu-->
					<ul class="navigation-menu">
						<li class="has-submenu">
							<a href="index.php">
								<i class="dripicons-meter"></i>Dashboard
							</a>
						</li>

						<?php

if($_SESSION['level_ptg'] == 'admin'){
?>

						<li class="has-submenu">
							<a href="index.php?p=pegawai">
								<i class="dripicons-briefcase"></i>Karyawan
							</a>
							
						</li>
						
						
						<li class="has-submenu">
					<a href="#"><i class="dripicons-broadcast"></i>Data Penggajian</a>
					<ul class="submenu">
					<li>
							<a href="index.php?p=penggajian">
								<i class="dripicons-graph-bar"></i> Input Penggajian
							</a>
							
						</li>
						<!-- <li>
							<a href="index.php?p=golongan">
								<i class="dripicons-briefcase"></i> Golongan
							</a>
							
						</li> -->
						<li>
							<a href="index.php?p=jabatan">
								<i class="dripicons-briefcase"></i> Jabatan
							</a>
							
						</li>
						
					
					</ul>
				</li>

						
						<li class="has-submenu">
							<a href="index.php?p=laporan">
								<i class="dripicons-graph-bar"></i>Laporan
							</a>
							
						</li>
						<li>
							<a href="index.php?p=user">
								<i class="dripicons-briefcase"></i> Manajement User
							</a>
							
						</li>
						
						<?php
}else if($_SESSION['level_ptg'] == 'HRD'){
?>

<li class="has-submenu">
							<a href="index.php?p=laporan">
								<i class="dripicons-graph-bar"></i>Laporan
							</a>
							
						</li>
						<?php
}
?>
						
						
					</ul><!-- End navigation menu -->
				</div><!-- end #navigation -->
			</div><!-- end container -->
		</div><!-- end navbar-custom -->
	</header><!-- End Navigation Bar-->
	<div class="wrapper">
		<?php 
		if( empty($_GET['p']) ){
			echo "<script>document.location.href='index.php?p=home'</script>";
		}else{
			$p=$_GET['p'];
			include "content/$p.php";
		}
		?>
	</div><!-- end wrapper -->
	<!-- Footer -->
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">2021 <span class="d-none d-sm-inline-block"> By</i> Isnaini</span>
				</div>
			</div>
		</div>
	</footer><!-- End Footer -->






	<!-- jQuery  -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/modernizr.min.js"></script>
	<script src="assets/js/detect.js"></script>
	<script src="assets/js/fastclick.js"></script>
	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/jquery.blockUI.js"></script>
	<script src="assets/js/waves.js"></script><!-- Alertify js -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

	<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
	<!-- Datatable init js -->
	<script src="assets/pages/datatables.init.js"></script>
	<!-- App js -->
	<script src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/pegawai.js"></script>

	<script type="text/javascript" src="assets/js/modal.js"></script>
	<script type="text/javascript" src="assets/js/penggajian.js"></script>
	<!-- skycons -->
<script src="assets/plugins/skycons/skycons.min.js"></script>
<!-- skycons -->
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<!-- dashboard -->
<script src="assets/pages/dashboard.js"></script>
</body>
</html>