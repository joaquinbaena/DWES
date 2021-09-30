<?php
    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    $nombre = "HARRY";
    $booleano = true;
    $num = 28;
    $dec = 23.3;
    $vacio = NULL;
    echo "<h1>Valor es ".gettype($nombre)."</h1>";
    echo "<h1>Valor es ".gettype($dec)."</h1>";
    echo "<h1>Valor es ".gettype($booleano)."</h1>";
    echo "<h1>Valor es ".gettype($num)."</h1>";
    echo "<h1>Valor es ".gettype($vacio)."</h1>";
    echo "</body></html>";
?>