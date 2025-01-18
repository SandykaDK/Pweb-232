<?php
/*
program pertama
*/
echo "Belajar php";
//echo "test";
$a = 10;
$b = 20;

$c = $a+$b;
echo "<br>";
echo "Hitung $a + $b = $c";
echo "<br>";
echo "Hitung ".$a." + ".$b." = ".$c;
echo "<br>";
$x = 40;
if($x > 50)
{
    echo "lebih besar dari 50";
}
else
{
    echo "kurang dari 50";
}
echo "<br>";
$x = 3;
switch ($x)
{
    case 1 :  echo "senin"; break;
    case 2 :  echo "selasa"; break;
    case 3 :  echo "rabu"; break;
    case 4 :  echo "kamis"; break;
    case 5 :  echo "jumat"; break;
    case 6 :  echo "sabtu"; break;
    case 7 :  echo "minggu"; break;
    default : echo "nilai lebih";

}

?>