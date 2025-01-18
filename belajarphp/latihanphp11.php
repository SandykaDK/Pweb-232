<?php
include "koneksi.php";

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
      //header('location:latihanphp09.php');
      echo("<script>location.href = 'latihanphp09.php';</script>");
    } else {
      echo '<script>alert("gagal bro")</script>';
    }   
} 
if(isset($_POST["delete"]))
{
    $kode = $_POST["kode"];
   
    $sql = "DELETE FROM barang  WHERE kode = '$kode'";    
    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("sukses delete bro")</script>';
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
if(isset($_GET["kode"]))
{
    $kode = $_GET["kode"];
    $nama = $_GET["nama"];
    $satuan = $_GET["satuan"];
    $hargabeli = $_GET["hargabeli"];
    $hargajual = $_GET["hargajual"];
}
else
{
    $kode = "";
    $nama =  "";
    $satuan =  "";
    $hargabeli = "";
    $hargajual = "";
}
?>
<html>
<body>
<form action ="" method="POST">
Kode :<input type="text" name="kode" readonly value="<?php echo $kode; ?>"><br>
Nama :<input type="text" name="nama" value="<?php echo $nama; ?>"><br>
Satuan :<input type="text" name="satuan" value="<?php echo $satuan; ?>"><br>
Harga Beli :<input type="number" name="hargabeli" value="<?php echo $hargabeli; ?>"><br>
Harga Jual :<input type="number" name="hargajual" value="<?php echo $hargajual; ?>"><br>
<input type="submit" name="update" value="update">
<input type="submit" name="delete" value="delete">
<input type="submit" name="cancel" value="cancel">
</form>

</body>
</html>