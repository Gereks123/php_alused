<!--
ÜLESANNE 4
German Eksi
01.12.2020 -->

<?php
echo '<h1>Siin on lahendused</h1>';

$arv1 = $_GET['arv_1'];
$arv2 = $_GET['arv_2'];
$jagatis = $arv1 / $arv2;

if(!empty($arv1 == 0 OR $arv2 == 0)) {
    echo  '0-ga ei tohi jagada!!!';
} else {
    echo "Arvude jagatis on: $jagatis <br>";
}

$vanus1 = $_GET['arv_3'];
$vanus2 = $_GET['arv_4'];

echo '<h2>Vanuse arvutamine</h2>';
if($vanus1 > $vanus2){
    echo "$vanus1 on vanem kui $vanus2 <br>";
} else if ($vanus2 > $vanus1) {
    echo "$vanus2 on vanem kui $vanus1";
}
echo '<h2>Ristkülik / ruut II</h2>';

$kulg1 = $_GET['kulg_1'];
$kulg2 = $_GET['kulg_2'];

if($kulg1 == $kulg2){
    echo "Tegu on ruuduga! <br>";
} else {
    echo "Tegu on ristkülikuga!";
}


echo '<h2>Juubel</h2>';


$juubel = $_GET['aasta'];

$vanus = 2020 - $juubel;

#if( == ){
 #   echo "Tegu on ruuduga! <br>";
#}

echo '<h2>Hinne</h2>';

$KT = $_GET['KT'];

switch($KT){
    case ($KT > 10):
        echo 'SUPER!';
    break;
    case ($KT <= 9 && $KT == 5):
        echo 'TEHTUD!';
    break;
    case ($KT < 5):
        echo 'KASIN';
    break;
    default:
        echo 'SISESTA OMA PUNKTID!';
}


