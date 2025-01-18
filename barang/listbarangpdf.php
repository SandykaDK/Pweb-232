<?php
require('../fpdf/fpdf.php');
include "..\belajarphp\koneksi.php";

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


$pdf->Cell(30,5,'Kode',1);
$pdf->Cell(60,5,'Nama',1);
$pdf->Cell(30,5,'Satuan',1);
$pdf->Cell(35,5,'Harga Beli',1);
$pdf->Cell(35,5,'Harga Jual',1,1);
$pdf->SetFont('Arial','',16);           
$sql ="select * from barang";
$hasil = mysqli_query($conn, $sql);
if(mysqli_num_rows($hasil)>0)
{
    while($row = mysqli_fetch_assoc($hasil)) {
        $kode=$row["kode"];
        $nama=$row["nama"];
        $satuan=$row["satuan"];
        $hargabeli=$row["hargabeli"];
        $hargajual=$row["hargajual"]; 
        $pdf->Cell(30,5,$kode,'1');
        $pdf->Cell(60,5,$nama,1);
        $pdf->Cell(30,5,$satuan,1);
        $pdf->Cell(35,5,number_format($hargabeli),1,0,'R');
        $pdf->Cell(35,5,number_format($hargajual),1,1,'R');
    }
}

$pdf->Output();
?>
