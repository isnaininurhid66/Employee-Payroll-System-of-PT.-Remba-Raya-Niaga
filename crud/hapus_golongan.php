<?php 
	

	
	include "../system/proses.php";
	$id = $_GET['id'];
	$hapus = $db->delete("golongan","kode_golongan='$id'");
	if( $hapus ){
		echo "<script>alert('Data Golongan Berhasil Dihapus')</script>";
		echo "<script>document.location.href='../index.php?p=golongan'</script>";
	}else{
		echo "<script>alert('Data Golongan Gagal Dihapus')</script>";
		echo "<script>document.location.href='../index.php?p=golongan'</script>";
	}
 ?>