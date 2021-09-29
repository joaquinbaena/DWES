<?php
    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    $x = 8;
    echo "<h1>Valor actual $x.</h1>";
    $x = $x + 2;
    echo "<h1>Suma 2. Valor ahora $x</h1>";
    $x = $x - 4;
    echo "<h1>Resta 4. Valor ahora $x</h1>";
    $x = $x * 5;
    echo "<h1>Multiplica por 5. Valor ahora $x</h1>";
    $x = $x / 3;
    echo "<h1>Divide por 3. Valor ahora $x</h1>";
    printf("<h1>Incrementa el valor en 1. Valor ahora %d</h1>",++$x);
    printf("<h1>Decrementa el valor en 1. Valor ahora %d</h1>",$x--);
    echo "</body></html>";
?>