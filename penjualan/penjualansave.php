<?php
include "..\belajarphp\koneksi.php";
if(isset($_POST["penjualan"]))
{
    $kodejual = $_POST["kodejual"];
    $tanggal = $_POST["tanggal"];
    $konsumen = $_POST["konsumen"];
    $telp = $_POST["telp"];
    $keterangan = $_POST["keterangan"];
    $grandtotal = $_POST["grandtotal"];
    $bayar = $_POST["bayar"];
    $sql = "INSERT INTO penjualan VALUES 
    ('$kodejual', '$tanggal', '$konsumen','$telp', '$keterangan', 
    $grandtotal, $bayar)";    
    mysqli_query($conn, $sql);
   
} 

if(isset($_POST["penjualandetail"]))
{
    $kodejual = $_POST["kodejual"];
    $kode = $_POST["kode"];
    $hargajual = $_POST["hargajual"];
    $jumlah = $_POST["jumlah"];
    
    $sql = "INSERT INTO penjualandetail VALUES 
    ('$kodejual', '$kode', $hargajual ,$jumlah)";    
    mysqli_query($conn, $sql);
   
} 

?>