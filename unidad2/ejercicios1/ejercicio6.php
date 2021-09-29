<?php
    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    $x = 10;
    $y = 7;
    $sum = $x + $y;
    $rest = $x - $y;
    $mult = $x * $y;
    $div = $x / $y;
    $resto = $x % $y;
    echo "<h1>$x + $y = $sum</h1>";
    echo "<h1>$x - $y = $rest</h1>";
    echo "<h1>$x * $y = $mult</h1>";
    echo "<h1>$x / $y = $div</h1>";
    echo "<h1>$x % $y = $resto</h1>";
    echo "</body></html>";
?>