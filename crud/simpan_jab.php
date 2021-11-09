<?php 
	include "../system/proses.php";
	

	if( isset($_POST['submit']) ){
		$simpan=$db->insert("jabatan","'$_POST[kode_jabatan]',
									'$_POST[nama_jabatan]',
									'$_POST[gaji_pokok]',
									'$_POST[tj_jabatan]',
									'$_POST[harian]'");
		if( $simpan ){
			echo "<script>alert('Data jabatan Berhasil Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=jabatan'</script>";
		}else{
			echo "<script>alert('Data jabatan Gagal Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=jabatan'</script>";
		}
	}else{
		$edit=$db->update("jabatan","kode_jabatan='$_POST[kode_jabatan]',
									nama_jabatan='$_POST[nama_jabatan]',
									gaji_pokok='$_POST[gaji_pokok]',
									tj_jabatan='$_POST[tj_jabatan]',
									harian='$_POST[harian]'","kode_jabatan='$_POST[kode_jabatan]'");
		if( $edit ){
			echo "<script>alert('Data jabatan Berhasil Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=jabatan'</script>";
		}else{
			echo "<script>alert('Data jabatan Gagal Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=jabatan'</script>";
		}
	}


 ?>