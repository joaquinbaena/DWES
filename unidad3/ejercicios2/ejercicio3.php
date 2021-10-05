<!-- Autor Joaquín Baena Salas
3. Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas-->
<?php
    echo "<html><head></head><body><table border='1'>";
    echo "<tr>";
    for ($i = 1; $i <= 10; $i++){
        echo "<th>tabla del".$i."</th>";
    }
    echo "</tr>";
    for ($i = 1; $i <= 10; $i++){
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++){
            echo "<td>". $j * $i."</td>";
        }
        echo "</tr>";
    }
    echo "</table></body></html>"
?>