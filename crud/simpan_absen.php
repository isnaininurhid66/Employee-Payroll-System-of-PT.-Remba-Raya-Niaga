<?php 
	include "../system/proses.php";
	

	if( isset($_POST['submit']) ){
		$simpan=$db->insert("pegawai","'$_POST[absen]'");
		if( $simpan ){
			echo "<script>alert('Data Berhasil Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=pegawai'</script>";
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=pegawai'</script>";
		}
	}else{
		$edit=$db->update("pegawai","absen='$_POST[absen]'","nip='$_POST[nip]'");
		if( $edit ){
			echo "<script>alert('Data absen Berhasil Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=pegawai'</script>";
		}else{
			echo "<script>alert('Data absen Gagal Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=pegawai'</script>";
		}
	}


 ?>