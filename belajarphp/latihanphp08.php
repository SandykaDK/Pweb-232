<?php
if(isset($_POST["hitung"]))
{
    $n1 = $_POST["nilai1"];
    $n2 = $_POST["nilai2"];
    $hasil = $n1+$n2;
} else
{
    $hasil = 0;
}
?>
<html>
<body>
<form action ="" method="POST">
Nilai 1 :<input type="text" name="nilai1" ><br>
Nilai 2 :<input type="text" name="nilai2" ><br>
Tanggal :<input type="date" name="tanggal" value="<?php echo date("Y-m-d"); ?>"><br>

<input type="submit" name="hitung" value="+">
</form>
<?php
echo $hasil;
?>
</body>
</html>