<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Ülesanne 10 avaleht</title>



</head>
<body>
    <menu>
        <a href="ülesanne_10.php">Avaleht</a>
        <a href="ülesanne_10.php?leht=ül10_1">Ül1</a>
        <a href="ülesanne_10.php?leht=ül10_2">Ül2</a>
        <a href="ülesanne_10.php?leht=ül10_3">Ül3</a>
        <a href="ülesanne_10.php?leht=ül10_4">Ül4</a>
    </menu>
</body>
<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    if(is_file($leht.'.php')){
        include($leht.'.php');
    }else {
        echo "Valitud lehte ei eksisteeri!";
    }

}


?>
</html>