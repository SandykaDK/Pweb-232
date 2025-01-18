<?php
include "koneksi.php";
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
      //header('location:latihanphp09.php');
      echo("<script>location.href = 'latihanphp09.php';</script>");
    } else {
      echo '<script>alert("gagal bro")</script>';
    }   
} 
if(isset($_POST["cancel"]))
{
    echo("<script>location.href = 'latihanphp09.php';</script>");
}
?>
<html>
<body>
<form action ="" method="POST">
Kode :<input type="text" name="kode" ><br>
Nama :<input type="text" name="nama" ><br>
Satuan :<input type="text" name="satuan" ><br>
Harga Beli :<input type="number" name="hargabeli" ><br>
Harga Jual :<input type="number" name="hargajual" ><br>
<input type="submit" name="save" value="save">
<input type="submit" name="cancel" value="cancel">

</form>

</body>
</html>