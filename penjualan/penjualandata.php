<div class="container mt-3">  
<?php
include "..\belajarphp\koneksi.php";

$sql ="select * from penjualan";
$hasil = mysqli_query($conn, $sql);
?>
<div class="card">
 <div class="card-header">
        <button type="button" id="tambahpenjualan" class="btn btn-success"> 
               +
        </button>
        <b>PENJUALAN</b></div>
 <div class="card-body">
 <table class="table" id="tabelpenjualan">
    <thead>
      <tr>
        <th>Kode</th>
        <th>Tanggal</th>
        <th>Konsumen</th>
        <th>Telp</th>
        <th>Grand Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
$x=0;    
if(mysqli_num_rows($hasil)>0)
{
    while($row = mysqli_fetch_assoc($hasil)) {
        $kodejual=$row["kodejual"];
        $tanggal=$row["tanggal"];
        $konsumen=$row["konsumen"];
        $telp=$row["telp"];
        $grandtotal=$row["grandtotal"];
        echo '<tr><td>'.$row["kodejual"].'</td>';
        echo '<td>'.$row["tanggal"].'</td>';
        echo '<td>'.$row["konsumen"].'</td>';
        echo '<td>'.$row["telp"].'</td>';
        echo '<td>'.$row["grandtotal"].'</td>'; 
        echo '<td><button class="btn btn-success" id="viewnya"
        onclick="functionpilih(\''.$kodejual.'\');"
        data-bs-toggle="modal" data-bs-target="#mymodalpenjualandetail">
        VIEW</button></td></tr>'; 
        $x=$x+$row["grandtotal"];
    }
}
?>
     
    </tbody>
    <tfood>
    <tr><td colspan="4" >TOTAL</td><td><?php echo $x; ?></td>
    <td></td></tr>
    </tfood>
  </table>
</div>
</div>

  
</div>



<!-- The Modal -->
<div class="modal" id="mymodalpenjualandetail">
 <div class="modal-dialog">
 <div class="modal-content">
 <!-- Modal Header -->
 <div class="modal-header">
 <h4 class="modal-title">Penjualan</h4>
 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
 </div>
 <!-- Modal body -->
 <div class="modal-body">

 <div id="isipenjualandetail"></div>
 
 </div>
 <!-- Modal footer -->
 <div class="modal-footer">
<button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-success btn-sm" data-bs-dismiss="modal">Print</button>
 </div>

 </div>
 </div>
</div>


<script>
  var kodejual ="";
  function functionpilih(kj)
  {
    kodejual = kj;
    console.log(kj);
    console.log('penjualan/penjualandetail.php?kodejual='+kodejual);
    $('#isipenjualandetail') .load('penjualan/penjualandetail.php?kodejual='+kodejual);  
  }
$(document).ready(function()
{
$('#tabelpenjualan').DataTable();

$("#tambahpenjualan").click(function()
 {    
  $('#isiutama') .load('penjualan/tambahpenjualan.php');  
});



});
</script>        