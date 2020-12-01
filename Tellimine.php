<?php



echo '<h1>Tellimine</h1>';

$trapets_1 = $_GET['t1'];
$trapets_2 = $_GET['t2'];
$trapets_korgus = $_GET['t3'];
$romb_kulg = $_GET['t4'];

$trapets_pindala = ($trapets_1 + $trapets_2 ) / 2 * $trapets_korgus;
$romb_umbermoot = $romb_kulg * 4;

echo 'Trapetsi pindala on: '.$trapets_pindala. '<br>';

echo  'Rombi umbermõõt on: '.$romb_umbermoot;