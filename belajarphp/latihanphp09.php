<?php
include "koneksi.php";

$sql ="select * from barang";
$hasil = mysqli_query($conn, $sql);
?>
<a href="latihanphp10.php" target="_self"><button>Tambah</button></a>
<table border="1">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Satuan</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
if(mysqli_num_rows($hasil)>0)
{
    while($row = mysqli_fetch_assoc($hasil)) {
        $kode=$row["kode"];
        $nama=$row["nama"];
        $satuan=$row["satuan"];
        $hargabeli=$row["hargabeli"];
        $hargajual=$row["hargajual"]; 
        echo '<tr><td>'.$row["kode"].'</td>';
        echo '<td>'.$row["nama"].'</td>';
        echo '<td>'.$row["satuan"].'</td>';
        echo '<td>'.$row["hargabeli"].'</td>';
        echo '<td>'.$row["hargajual"].'</td>'; 
        echo '<td><a href="latihanphp11.php?kode='.$kode.'&nama='.$nama.'&satuan='.$satuan.'&hargabeli='.$hargabeli.'&hargajual='.$hargajual.'" target="_self">
        <button>VIEW</button></a></td></tr>'; 
    }
}
?>
    </tbody>
</table>
<?php
mysqli_close($conn);
?>