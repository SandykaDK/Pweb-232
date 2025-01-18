<?php
include "..\belajarphp\koneksi.php";
if(isset($_POST["update"]))
{
    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $satuan = $_POST["satuan"];
    $hargabeli = $_POST["hargabeli"];
    $hargajual = $_POST["hargajual"];
    $sql = "UPDATE barang  set nama = '$nama', satuan = '$satuan',
    hargabeli = $hargabeli, hargajual = $hargajual where kode = '$kode'";    
    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("sukses bro")</script>';
    } else {
      echo '<script>alert("gagal bro")</script>';
    }   
} 

?>