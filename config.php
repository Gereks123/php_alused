<?php
$db_server = "localhost";
$db = "muusikapood";
$username = "German";
$psw = "katse123@";

$query = "SELECT * FROM albumid";
$conn = mysqli_connect($db_server,$username,$psw,$db);
$valjund = mysqli_query($conn, $query);

$query_kahanev = "SELECT artist, album FROM albumid ORDER BY hind ASC";
$valjund_1 = mysqli_query($conn, $query_kahanev);
//ARTISITD, ALBUMIGA AASTAST 2010 JA UUEM
$query_2010 = "SELECT artist, album FROM albumid WHERE aasta >= 2010";
$query_2010_yhendus = mysqli_query($conn, $query_2010);
//AVG ja SUM hinnad
$query_erinevus = "SELECT DISTINCT  album, AVG(hind) AS 'keskmine hind', SUM(hind) AS 'kokku hind' FROM albumid GROUP BY album";
$query_erinevus_yhendus = mysqli_query($conn, $query_erinevus);


$koige_vanem = "SELECT album, MIN(aasta) FROM albumid WHERE album=aasta";

$koige_vanem_query = mysqli_query($conn, $koige_vanem);

echo "KÕIK ANDMED <br>";
    while($rida = mysqli_fetch_assoc($valjund)){
        echo $rida['id']. ' - '. $rida['artist']. ' - '. $rida['album']. ' - ' . $rida['aasta'].' - '. $rida['hind']. ' - '. '<br>';
    }
    echo "ARTISTID JA ALBUM <br>";
while($rida2 = mysqli_fetch_assoc($valjund_1)){
    echo $rida2['artist']. ' - '. $rida2['album']. ' - '. '<br>';
}
echo "AASTAST 2010 - ROHKEM <br>";
while($rida3 = mysqli_fetch_assoc($query_2010_yhendus)){
    echo $rida3['artist'].' - '. $rida3['album'].' - '. '<br>';
}

echo "AVG JA SUM HINNAD <br>";
while($rida4 = mysqli_fetch_assoc($query_erinevus_yhendus)){
  printf("Album:  %s <br>", $rida4['album']);
  printf("Keskmine:%0.2f <br>", $rida4['keskmine hind']);
    printf("Kokku:%d <br>", $rida4['kokku hind']);


}

echo "KÕIGE VANEM ALBUM <br>";
while($rida5 = mysqli_fetch_assoc($koige_vanem_query))
{
    printf("Album: %s <br>", $rida5['album']);
    printf("Vanus: %d <br>", $rida5['MIN(aasta)']);
}

mysqli_close($conn);
?>