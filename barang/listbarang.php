<div class="container mt-3">
  <h2>Data Barang</h2>
<?php
include "..\belajarphp\koneksi.php";

$sql ="select * from barang";
$hasil = mysqli_query($conn, $sql);
?>
<button id="tambahbarang" class="btn btn-success" 
data-bs-toggle="modal" data-bs-target="#modaltambahbarang">Tambah</button>
<a href="barang/listbarangpdf.php"><button class="btn btn-danger">Print</button></a>
  <table class="table table-bordered table-sm" id="tblbarang">
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
        echo '<td><button class="btn btn-success" 
        data-bs-toggle="modal" data-bs-target="#modalviewbarang">
        VIEW</button></td></tr>'; 
    }
}
?>
    </tbody>
  </table>
<?php
mysqli_close($conn);
?>
</div>

<!-- The Modal -->
<div class="modal" id="modaltambahbarang">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Barang</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
<div class="mb-1">
<label for="Kode" class="form-label">Kode:</label>
<input type="text" name="kode" class="form-control" placeholder="Enter Kode" id="kode">
</div>    

<div class="mb-1">
<label for="Nama" class="form-label">Nama:</label>
<input type="text" name="nama" class="form-control" placeholder="Enter Nama" id="nama">
</div>    

<div class="mb-1">
<label for="Satuan" class="form-label">Satuan:</label>
<input type="text" name="satuan" class="form-control" placeholder="Enter Satuan" id="satuan">
</div>    

<div class="mb-1">
<label for="Hargabeli" class="form-label">Harga Beli:</label>
<input type="number" name="hargabeli" class="form-control" placeholder="Enter Harga Beli" id="hargabeli">
</div>  

<div class="mb-1">
<label for="Hargajual" class="form-label">Harga Jual:</label>
<input type="number" name="hargajual" class="form-control" placeholder="Enter Harga Jual" id="hargajual">
</div>  


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="save" >Save</button>
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<div class="modal" id="modalviewbarang">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">View Barang</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
<div class="mb-1">
<label for="Kodev" class="form-label">Kode:</label>
<input type="text" name="kodev" class="form-control" placeholder="Enter Kode" id="kodev" readonly>
</div>    

<div class="mb-1">
<label for="Namav" class="form-label">Nama:</label>
<input type="text" name="namav" class="form-control" placeholder="Enter Nama" id="namav">
</div>    

<div class="mb-1">
<label for="Satuanv" class="form-label">Satuan:</label>
<input type="text" name="satuanv" class="form-control" placeholder="Enter Satuan" id="satuanv">
</div>    

<div class="mb-1">
<label for="Hargabeliv" class="form-label">Harga Beli:</label>
<input type="number" name="hargabeliv" class="form-control" placeholder="Enter Harga Beli" id="hargabeliv">
</div>  

<div class="mb-1">
<label for="Hargajualv" class="form-label">Harga Jual:</label>
<input type="number" name="hargajualv" class="form-control" placeholder="Enter Harga Jual" id="hargajualv">
</div>  


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="update" >Update</button>
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="delete" >Delete</button>
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    $('#tblbarang').DataTable();

$("#tblbarang tr").on('click',function(){
var isikode=$(this).find("td:eq(0)").text();
var isinama=$(this).find("td:eq(1)").text();
var isisatuan=$(this).find("td:eq(2)").text();
var isihargabeli=$(this).find("td:eq(3)").text();
var isihargajual=$(this).find("td:eq(4)").text();
$("#kodev").val(isikode);
$("#namav").val(isinama);
$("#satuanv").val(isisatuan);
$("#hargabeliv").val(isihargabeli);
$("#hargajualv").val(isihargajual);

});

    $('#save').click(function()
    {
  
    var kode = $("#kode").val();
    var nama = $("#nama").val();
    var satuan = $("#satuan").val();
    var hargabeli = $("#hargabeli").val();
    var hargajual = $("#hargajual").val();
    var save = 'ok';

   $.ajax({
            url: "http://localhost/pweb232/barang/simpanbarang.php",
            type: "POST",
            data: {kode:kode, nama: nama, satuan:satuan,
            hargajual:hargajual, hargabeli:hargabeli, save: save},
            dataType: "json",      
            success : function(dataResult)
            {                
              $('#isiutama') .load('http://localhost/pweb232/barang/listbarang.php');               
            } 
    });

    } );


    $('#update').click(function()
    {
      var kode = $("#kodev").val();
    var nama = $("#namav").val();
    var satuan = $("#satuanv").val();
    var hargabeli = $("#hargabeliv").val();
    var hargajual = $("#hargajualv").val();
    var updatex = 'ok';

    
   $.ajax({
            type: "POST",
            url: "http://localhost/pweb232/barang/ubahbarang.php",
            data: {kode:kode, nama: nama, satuan:satuan,
            hargajual:hargajual, hargabeli:hargabeli, update: updatex},
            dataType: "json",    
            success : function(data)
            {                
              $('#isiutama').load('http://localhost/pweb232/barang/listbarang.php');               
            } 
    });

    } );


    $('#delete').click(function()
    {
    var kode = $("#kodev").val();
    var deletex = 'ok';

   
   $.ajax({
            type: "POST",
            url: "http://localhost/pweb232/barang/deletebarang.php",
            data: {kode:kode, delete: deletex},
            dataType: "json",    
            success : function(data)
            {                
              $('#isiutama').load('http://localhost/pweb232/barang/listbarang.php');               
            } 
    });

    } );





} );
</script> 