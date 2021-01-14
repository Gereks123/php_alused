<?php
#German Eksi , 05.01.2021 Ülesanne 9
#1


function vorm($nimi) {
    $esimene_letter = ucfirst(strtolower($nimi));
    echo "Tere, ".$esimene_letter;
}

echo vorm('gUStav');

#2
echo "<br>";
function tükeldamine($sõna) {
    for($i=0;$i<strlen($sõna);$i++){
        echo $sõna[$i].".";
    }
}
echo tükeldamine('Karl');


#3
function asendamine() {
    $tekst = "Sa oled noob";
    $otsi = array("noob");
    $asenda = array("****");
    echo "<br>".str_replace($otsi,$asenda,$tekst);
}

echo asendamine();

#4
function email($eesnimi,$perenimi) {
    $otsi = array('ä', 'ö', 'ü', 'õ');
    $asenda = array('a','o','y','o');
}