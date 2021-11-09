<?php 
	include "../system/proses.php";
	$id = $_GET['id'];
	$hapus = $db->delete("jabatan","kode_jabatan='$id'");
	if( $hapus ){
		echo "<script>alert('Data Jabatan Berhasil Dihapus')</script>";
		echo "<script>document.location.href='../index.php?p=jabatan'</script>";
	}else{
		echo "<script>alert('Data Jabatan Gagal Dihapus')</script>";
		echo "<script>document.location.href='../index.php?p=jabatan'</script>";
	}
 ?>