<?php 
	include "../system/proses.php";
	

	if( isset($_POST['submit']) ){
		$simpan=$db->insert("golongan","'$_POST[kode_golongan]',
									'$_POST[golongan]',
									'$_POST[tj_suami_istri]',
									'$_POST[tj_anak]'");
		if( $simpan ){
			echo "<script>alert('Data Golongan Berhasil Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=golongan'</script>";
		}else{
			echo "<script>alert('Data Golongan Gagal Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=golongan'</script>";
		}
	}else{
		$edit=$db->update("golongan","kode_golongan='$_POST[kode_golongan]',
									golongan='$_POST[golongan]',
									tj_suami_istri='$_POST[tj_suami_istri]',
									tj_anak='$_POST[tj_anak]'","kode_golongan='$_POST[kode_golongan]'");
		if( $edit ){
			echo "<script>alert('Data Golongan Berhasil Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=golongan'</script>";
		}else{
			echo "<script>alert('Data Golongan Gagal Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=golongan'</script>";
		}
	}


 ?>