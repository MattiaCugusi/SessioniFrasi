<?php
session_start();

if (!isset($_SESSION["importanzaMassima"])){
    $_SESSION["importanzaMassima"] = array();
}

if (!isset($_SESSION["totaleParole"])){
    $_SESSION["totaleParole"] = 0;
}

if (!isset($_SESSION["totaleCaratteri"])){
    $_SESSION["totaleCaratteri"] = 0;
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script</title>
</head>
<body>
    <?php
    $frase = $_POST["frase"];
    $importanza = $_POST["importanza"];

    if ($importanza == "4"){
        array_push($_SESSION["importanzaMassima"], $frase);
    }

    $_SESSION["totaleParole"] = $_SESSION["totaleParole"] + str_word_count($frase);

    $_SESSION["totaleCaratteri"] = $_SESSION["totaleCaratteri"] + strlen($frase);

    
    echo "<p>Frase: " . $frase . "</p>";
    echo "<p>Importanza: " . $importanza . "</p>";

    ?>

    <p><a href="./frase.html">Torna alla form</a></p>
</body>
</html>