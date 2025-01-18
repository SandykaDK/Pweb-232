<?php
include "..\belajarphp\koneksi.php";
if(isset($_POST["save"]))
{
    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $satuan = $_POST["satuan"];
    $hargabeli = $_POST["hargabeli"];
    $hargajual = $_POST["hargajual"];
    $sql = "INSERT INTO barang VALUES ('$kode', '$nama', '$satuan',$hargabeli, $hargajual)";    
    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("sukses bro")</script>';
    } else {
      echo '<script>alert("gagal bro")</script>';
    }   
} 

?>