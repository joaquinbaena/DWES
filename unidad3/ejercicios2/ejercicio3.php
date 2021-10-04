<!-- Autor Joaquín Baena Salas
3. Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas-->
<?php
    echo "<html><head></head><body><table border='1'";
    echo "<tr><th>tabla del 1</th><th>tabla del 2</th><th>
    tabla del 3</th><th>tabla del 4</th><th>tabla del 5</th><th>
    tabla del 6</th><th>tabla del 7</th><th>tabla del 8</th>
    <th>tabla del 9</th><th>tabla del 10</th>";
    for ($i = 1; $i <= 10; $i++){
        echo "<tr>";
        echo "<td color='blue'>". 1 * $i."</td>";
        echo "<td color='lightgreen'>". 2 * $i."</td>";
        echo "<td color='lightyellow'>". 3 * $i."</td>";
        echo "<td>". 4 * $i."</td>";
        echo "<td>". 5 * $i."</td>";
        echo "<td>". 6 * $i."</td>";
        echo "<td>". 7 * $i."</td>";
        echo "<td>". 8 * $i."</td>";
        echo "<td>". 9 * $i."</td>";
        echo "<td>". 10 * $i."</td>";
        echo "</tr>";
    }
    echo "</body></table></html>"
?>