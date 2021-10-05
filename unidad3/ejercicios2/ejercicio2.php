<!-- Autor Joaquín Baena Salas
2. Sumar los 3 primeros números pares.-->
<?php
    $num = 0;
    for($i = 1; $i <= 3 ; $i++){
        $par = 2 * $i;
        $num = $num + $par;
    }
    echo "$num";
?>