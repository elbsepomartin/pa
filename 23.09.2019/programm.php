<?php
$eesNimi = "Sepo-Martin";
$pereNimi = "Elb";
$vanus = "20";
$pikkus = "1.80";
$kaal = "60";

echo '<h1>Minu andmed</h1>'
echo $eesnimi." ".$perenimi."<br>";
echo $vanus."<br>";
echo $pikkus."<br>";
echo $kaal."<br>";

$kmi = $kaal / ($pikkus * $pikkus);
echo 'Minu kehamassiindeks: ' .$kmi.'<br>'