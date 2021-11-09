<?php 
	include "../system/proses.php";
	if($_POST['statuss']=="Belum Menikah"){
		$anak = 0;
	}else{
		$anak = $_POST['anak'];
	}

	if( isset($_POST['submit']) ){
		$simpan=$db->insert("pegawai","'$_POST[nip]',
									'$_POST[nama]',
									'$_POST[nama2]',
									'$_POST[tempat_lahir]',
									'$_POST[tanggal_lahir]',
									'$_POST[jabatan]',
									'$_POST[golongan]',
									'$_POST[statuss]',
									'$anak',
									'$_POST[alamat]',
									'$_POST[cabang]',
									'$_POST[nohp]',
									'$_POST[nowa]',
									'$_POST[tgl_gabung]',
									'$_POST[norek]',
									'$_POST[absen]',
									'$_POST[kelurahan]',
									'$_POST[kecamatan]',
									'$_POST[kota]',
									'$_POST[kode_pos]'");
		if( $simpan ){
			echo "<script>alert('Data Berhasil Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=pegawai'</script>";
		}else{
			echo "<script>alert('Data Gagal Disimpan')</script>";
			echo "<script>document.location.href='../index.php?p=pegawai'</script>";
		}
	}else{
		$edit=$db->update("pegawai","nip='$_POST[nip]',
									nama='$_POST[nama]',
									nama2='$_POST[nama2]',
									tempat_lahir='$_POST[tempat_lahir]',
									tanggal_lahir='$_POST[tanggal_lahir]',
									kode_jabatan='$_POST[jabatan]',
									status='$_POST[statuss]',
									jumlah_anak='$anak',
									alamat='$_POST[alamat]',
									cabang='$_POST[cabang]',
									nohp='$_POST[nohp]',
									nowa='$_POST[nowa]',
									tgl_gabung='$_POST[tgl_gabung]',
									norek='$_POST[norek]',
									kelurahan='$_POST[kelurahan]',
									kecamatan='$_POST[kecamatan]',
									kota='$_POST[kota]',
									kode_pos='$_POST[kode_pos]'","nip='$_POST[nip]'");
		if( $edit ){
			echo "<script>alert('Data Berhasil Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=pegawai'</script>";
		}else{
			echo "<script>alert('Data Gagal Di Update')</script>";
			echo "<script>document.location.href='../index.php?p=pegawai'</script>";
		}
	}


 ?>