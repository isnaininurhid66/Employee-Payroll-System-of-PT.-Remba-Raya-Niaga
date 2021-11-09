<?php 
	include "../system/proses.php";
	

	if( isset($_POST['submit']) ){
		$simpan=$db->insert("petugas","'$_POST[kode_petugas]',
		'$_POST[nama]',
		'$_POST[username]',
		'$_POST[password]',
									'$_POST[status]'");
		if( $simpan ){
			echo "<script>alert('Data Petugas Berhasil Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=user'</script>";
		}else{
			echo "<script>alert('Data Petugas Gagal Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=f_user'</script>";
		}
	}else{
		$edit=$db->update("petugas","kode_petugas='$_POST[kode_petugas]',
        nama='$_POST[nama]',
        username='$_POST[username]',
        password='$_POST[password]',
        status='$_POST[status]'","kode_petugas='$_POST[kode_petugas]'");
		if( $edit ){
			echo "<script>alert('Data Petugas Berhasil Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=user'</script>";
		}else{
			echo "<script>alert('Data Petugas Gagal Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=user'</script>";
		}
	}


 ?>