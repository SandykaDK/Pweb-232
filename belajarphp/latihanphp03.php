<?php

$x = array(10,20,30,40,50);

echo $x[2];
echo "<br>";
echo $x[3];
echo "<br>isi array : <br>";
foreach($x as $isi)
{
    echo $isi."<br>";
}

echo "<br> isi array object <br>";
$y = array("tr01"=>2000,"tr02"=>3000,
"tr03"=>4000);

echo $y['tr02'];
echo "<br>isi array : <br>";
foreach($y as $isi)
{
    echo $isi."<br>";
}

echo "<br>isi object array : <br>";
foreach($y as $obj => $isi)
{
    echo $obj."<br>";
}

echo count($y);
echo "<br>";
print_r($y);

?>