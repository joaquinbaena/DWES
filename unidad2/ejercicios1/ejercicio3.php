<?php
    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    $rad = 60;
    $area = $rad * pi() * pi();
    $longitud = 2 * pi() * $rad;
    echo "<h1>El area es $area metros cuadrados</h1>";
    echo "<h1>La longitud de la circunferencia será $longitud metros";
    echo "<svg height='400' width='400'>
        <circle cx='50' cy='50' r='$rad' stroke='black' stroke-width='3' fill='red' />
        </svg>";
  echo "</body></html>";
?>