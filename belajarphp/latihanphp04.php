<?php
function persegi()
{
    $x=20;
    $y=30;
    $l=$x*$y;
    echo $l;
}
function persegiluas()
{
    $x=2;
    $y=3;
    $l=$x*$y;
    return $l;
}
function persegivolume($p,$l,$t)
{
    
    $v=$p*$l*$t;
    return $v;
}

persegi();
echo "<br>";
echo persegiluas();
echo "<br>";
echo persegivolume(2,3,4);
?>