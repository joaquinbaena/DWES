<!-- Autor Joaquín Baena Salas
2. Carga en variables mes y año e indica el número de días del mes.
Utiliza la estructura de control switch -->
<?php
    $mes = "enero";
    $anio = 2000;
    switch($mes){
        case "febrero":
            if($anio % 400 == 0){
                print "$mes tiene 29 días";
            }else if($anio % 4 == 0 && $anio % 100 != 0){
                print "$mes tiene 29 días";
            }else{
                print "$mes tiene 28 días";
            }
            break;
        case "enero":
        case "marzo":
        case "mayo":
        case "agosto":
        case "octubre":
        case "diciembre":
            print "$mes tiene 31 días";
            break;
        case "abril":;
        case "junio":
        case "julio":
        case "septiembre":
        case "noviembre":
            print "$mes tiene 30 días";
            break;
        default:
            print "Introduzca un mes conrrecto";
    }
?>