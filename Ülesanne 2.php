<?php

/*
 Ülesanne 2, German Eksi. 24.11.2020
 */

printf('%d on %s aastane', 3.2, "seitsme");

$arv_1 = 3;
$arv_2 = 5;

$liitmine = $arv_1 + $arv_2;
$lahutamine = $arv_1 - $arv_2;
$korrutamine = $arv_1 * $arv_2;
$jagamine = $arv_1 / $arv_2;
$jaak = $arv_1 % $arv_2;

printf('<br> Liitmise vastus on = %d ja selle arvutus %d + %d', $liitmine, $arv_1, $arv_2);
printf('<br> Lahutamise vastus on = %d ja selle arvutus %d - %d', $lahutamine, $arv_1, $arv_2);
printf('<br> Korrutamise vastus on = %d ja selle arvutus %d * %d', $korrutamine, $arv_1, $arv_2);
printf('<br> Jagamise vastus on = %d ja selle arvutus %d / %d', $jagamine, $arv_1, $arv_2);
printf('<br> Jäägi vastus on = %d ja selle arvutus %d %s %d', $jaak, $arv_1, "%", $arv_2);

$tiitel = '<h1>Siin on millimeetri tehted</h1>';

echo $tiitel;

$mm = 10;

$cm = $mm / 10;

$meeter = $mm / 1000;

printf('Vastused on vastavad: %0.2f cm, mis on sentimeetrites ja %0.2f meetrit, mis on meetrites', $cm, $meeter);

$tiitel_1 = '<h2>Siin on Kolmnurga tehted</h2>';
echo $tiitel_1;

$nurk_1 = 30;
$nurk_2 = 20;
$nurk_3 = 10;

$umbermoot = $nurk_1 + $nurk_2 + $nurk_3;

$pindala = (30 * 20) / 2;

printf('Kolmnurga ümbermõõt on %d ning kolmnurga pindala on %d', $umbermoot, $pindala)
;
