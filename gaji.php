<?php
include 'system/proses.php';
require('pdf/fpdf.php');
date_default_timezone_set('Asia/Jakarta');
$pdf = new FPDF("L","cm","A4"); #test

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('assets/images/jenid.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PT REMBA RAYA NIAGA',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 02129361198',0,'L');  
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Alamat : Graha Komando (Komando Virtual Office) Lt.3,Jl.Cipinang Indah Raya, RT.003 RW.013,Kel.Cipinang,Kec.Jatinegara,Jakarta Timur',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"LAPORAN GAJI KARYAWAN",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("d/m/Y | H:i"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(3, 0.8, 'No Slip', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Jabatan', 1, 0, 'C');
$pdf->Cell(3.5, 0.8, 'Tunjangan Jabatan', 1, 0, 'C');
$pdf->Cell(3.5, 0.8, 'Gaji Kotor', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Gaji Bersih', 1, 1, 'C');
$pdf->SetFont('Arial','',10);

$qr = $db->get("gaji.no_slip,gaji.Tanggal,pegawai.nama,pegawai.nip,jabatan.nama_jabatan,jabatan.tj_jabatan,golongan.tj_anak,golongan.tj_suami_istri,gaji.potongan,gaji.gaji_bersih","gaji","INNER JOIN pegawai ON gaji.nip=pegawai.nip INNER JOIN jabatan ON jabatan.kode_jabatan=pegawai.kode_jabatan INNER JOIN golongan on pegawai.kode_golongan=golongan.kode_golongan");

    foreach($qr as $tampil):
	$pdf->Cell(3, 0.8, $tampil['no_slip'] , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $tampil['nama'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $tampil['Tanggal'], 1, 0,'C');
	$pdf->Cell(5, 0.8, $tampil['nama_jabatan'],1, 0, 'C');
	$pdf->Cell(3.5, 0.8, number_format($tampil['tj_jabatan'], 0, ".", "."), 1, 0,'C');
	$pdf->Cell(3.5, 0.8, number_format($tampil['potongan'], 0, ".", "."),1, 0, 'C');
	$pdf->Cell(4, 0.8, number_format($tampil['gaji_bersih'], 0, ".", "."), 1, 1,'C');
	
endforeach;

$pdf->ln(1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40.5,0.7,"Tanggal: ".date("d/m/Y"),0,0,'C');

$pdf->ln(1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40.5,0.7,"Mengetahui",0,10,'C');

$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40.5,0.7,"SUGENG",0,10,'C');


$pdf->Output("LAPORAN_GAJI.pdf","I");

?>

