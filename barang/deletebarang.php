<?php
include "..\belajarphp\koneksi.php";
if(isset($_POST["delete"]))
{
    $kode = $_POST["kode"];
    $sql = "DELETE FROM barang  WHERE kode = '$kode'";    
    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("sukses bro")</script>';
    } else {
      echo '<script>alert("gagal bro")</script>';
    }   
} 

?>