<div class="row mb-2 mt-2">
 <div class="col-sm-4">
 <label for="tanggal" class="form-label">Kode:</label>
</div>
<div class="col-sm-8">
<label id="tanggal" class="form-label"><?php echo $_GET['kodejual']; ?></label>
</div>
 </div>

 <?php
 include "..\belajarphp\koneksi.php";
$kodejual=$_GET['kodejual'];
$sql ="select * from penjualan where kodejual = '$kodejual'";
$hasil = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($hasil)) {
$tanggal = $row["tanggal"];
$konsumen = $row["konsumen"];
$telp = $row["telp"];
$keterangan = $row["keterangan"];
$grandtotal = $row["grandtotal"];
$bayar = $row["bayar"];
}
?>


<div class="row mb-2 mt-2">
 <div class="col-sm-4">
 <label for="tanggal" class="form-label">Tanggal:</label>
 </div>
<div class="col-sm-8">
<label id="tanggal" class="form-label"><?php echo $tanggal;?></label>
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-4">
 <label for="tanggal" class="form-label">Konsumen:</label>
 </div>
<div class="col-sm-8">
<label id="tanggal" class="form-label"><?php echo $konsumen;?></label>
</div>
 </div>


 <div class="row mb-2 mt-2">
 <div class="col-sm-4">
 <label for="tanggal" class="form-label">Telp:</label>
 </div>
<div class="col-sm-8">
<label id="tanggal" class="form-label"><?php echo $telp;?></label>
</div>
 </div>


 <div class="row mb-2 mt-2">
 <div class="col-sm-4">
 <label for="keterangan" class="form-label">Keterangan:</label>
</div>
<div class="col-sm-8">
<label id="keterangan" class="form-label"><?php echo $keterangan;?></label>
</div>
 </div>

 


 <table class="table table-bordered" >
 <thead>
 <tr align="center">
 <th>Kode</th>
 <th>Nama</th>
 <th>Satuan</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Total</th>
 </tr>
 </thead>
 <?php
$sqldetail ="select * from penjualandetail inner join 
barang on barang.kode = penjualandetail.kode 
where kodejual = '".$kodejual."'";
$hasildetail = mysqli_query($conn, $sqldetail);
?>
 <tbody>
 <?php

if(mysqli_num_rows($hasildetail)>0)
{
    while($row = mysqli_fetch_assoc($hasildetail)) {
        $kode=$row["kode"];
        $nama=$row["nama"];
        $satuan=$row["satuan"];
        $hargajual=$row["hargajual"]; 
        echo '<tr><td>'.$row["kode"].'</td>';
        echo '<td>'.$row["nama"].'</td>';
        echo '<td>'.$row["satuan"].'</td>';
        echo '<td>'.number_format($row["hargajual"]).'</td>'; 
        echo '<td>'.$row["jumlah"].'</td>'; 
        echo '<td>'.number_format($row["hargajual"]*$row["jumlah"]).'</td>'; 
        echo '</tr>'; 
    }
}
?>
</tbody>
</table>
<div class="row mb-2 mt-2">
 <div class="col-sm-8">
 <label for="keterangan" class="form-label">Grand Total:</label>
</div>
<div class="col-sm-4">
<label id="keterangan" class="form-label"><?php echo number_format($grandtotal);?></label>
</div>
 </div>
 <div class="row mb-2 mt-2">
 <div class="col-sm-8">
 <label for="keterangan" class="form-label">Bayar:</label>
</div>
<div class="col-sm-4">
<label id="keterangan" class="form-label"><?php echo number_format($bayar);?></label>
</div>
 </div>

 <div class="row mb-2 mt-2">
 <div class="col-sm-8">
 <label for="keterangan" class="form-label">Kembali:</label>
</div>
<div class="col-sm-4">
<label id="keterangan" class="form-label"><?php echo number_format($bayar-$grandtotal);?></label>
</div>
 </div>