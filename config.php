<?php
$db_server = "localhost";
$db = "muusikapood";
$username = "German";
$psw = "katse123@";

$query = "SELECT * FROM albumid";
$conn = mysqli_connect($db_server,$username,$psw,$db);
$valjund = mysqli_query($conn, $query);
?>