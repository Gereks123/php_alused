<?php

#1



function tere($nimi='Kylaline'){
    return ("Tere, $nimi<br>");

}
echo tere('Madis');

#2


#3
function muuda($nimed){
    $nimed2 = strtolower($nimed);
    $mail = "$nimed2@khk.edu.ee";
    echo "Nimi on:$nimed2, e-post:$mail" ."<br>";
    $kood = 1234567;
    $segadus = "Katse.". 2 . ".Vahe." . 3 . ".Ei";
    echo $kood, "<br>".$segadus;
}

echo muuda('JOSHUA');

#4

function arvutus($algus,$lopp,$samm) {

    for($algus;$algus <= $lopp;$algus+=$samm) {
        echo $algus."<br>";
    }
}
echo arvutus(5,30,5);

#5 Ristkülik
function ristkülik($a,$b) {
    echo "Ristküliku pindala on: " . $a*$b. "m2";
}
echo ristkülik(2,30);
echo "<br>";
#6 Isikukood

function isikukood($isik) {

    if(strlen($isik) != 11) {
        echo "Isikukoodi liiga pikk / lühike, peab olema 11 märki";
    }else {
        $sugu = substr($isik, 0 , 1);
        if($sugu == 5){
            echo "Sugu: Mees";
        }elseif($sugu == 6) {
            echo "Sugu: Naine";
        }
        $sünniaasta = substr($isik, 1,2);
        echo "<br>Teie sünniaasta: ".$sünniaasta;
    }
}
echo isikukood(62345678910);


#7 Head mõtted

function massiivid() {
    $alus = array("kael","kirjak","labidas","kaalikas");
    $öeldis = array("kaelkirja","lehm","sõel","koer");
    $sihitis = array("pull","KHK","kuritarvitama","ohtlik");

    $uks = $alus[array_rand($alus,1)];
    $kaks = $öeldis[array_rand($öeldis,1)];
    $kolm = $sihitis[array_rand($sihitis,1)];
    $lause = "$uks $kaks $kolm";
    echo "<br>" .$lause;

}
echo massiivid();

//Kahe array'ga
#
$array1 = array(32,44,55,11,77,88,100);
$array2 = array(56,11,2,1,7,81,10011);

//Eraldi leida MAX
echo "<br>".max($array1);
echo "<br>".max($array2);

//Leida mõlema array max
echo "<br>".max(max($array1), max($array2));

//Astendamine
echo "<br>".pow(5,2); //25
echo "<br>".pow(5,3); //125

//Ruutjuur
echo "<br>".sqrt(9); //3

