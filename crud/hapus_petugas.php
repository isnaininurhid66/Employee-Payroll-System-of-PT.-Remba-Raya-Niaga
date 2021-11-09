<?php 
	

	
	include "../system/proses.php";
	$id = $_GET['id'];
	$hapus = $db->delete("petugas","kode_petugas='$id'");
	if( $hapus ){
		echo "<script>alert('Data Petugas Berhasil Dihapus')</script>";
		echo "<script>document.location.href='../index.php?p=user'</script>";
	}else{
		echo "<script>alert('Data Petugas Gagal Dihapus')</script>";
		echo "<script>document.location.href='../index.php?p=user'</script>";
	}
 ?>