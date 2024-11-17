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
    <title>Riepilogo</title>
</head>
<body>
    <?php
    echo "<h3>FRASI CON IMPORTANZA MASSIMA</h3>";
    echo "<ul>";
     for ($i=0; $i<count($_SESSION["importanzaMassima"]); $i++){
        echo "<li>" . $_SESSION["importanzaMassima"][$i] . "</li>";
     }

     echo "</ul>";
    ?>

   <table style="border: 1px solid black; border-collapse: collapse; text-align:center">
        <tr>
            <th style='border: 1px solid black'>Totale Parole</th>
            <th style='border: 1px solid black'>Totale Caratteri</th>
            
        </tr>

    <?php

    echo "<tr>
           <td style='border: 1px solid black'>" . $_SESSION["totaleParole"] . "</td>
           <td style='border: 1px solid black'>" . $_SESSION["totaleCaratteri"] . "</td>
          </tr>
          </table>";
 
          

    ?>

    <p><a href="./frase.html">Torna alla form</a></p>

</body>
</html>