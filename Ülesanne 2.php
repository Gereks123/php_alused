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
