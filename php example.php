<?php


$navn = $_GET["juicenavn"];
$anti = $_GET["antioksidanter"];



$resfil = fopen("juice.csv","a");

$linje = $navn . ";" . $anti. "\n";

fwrite($resfil,$linje);

fclose($resfil);

?> 