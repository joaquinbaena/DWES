<!-- Autor Joaquín Baena Salas
2. Carga en variables mes y año e indica el número de días del mes.
Utiliza la estructura de control switch -->
<?php
    $mes = "febrero";
    $anio = 2000;
    switch($mes){
        case "enero":
            print "$mes tiene 31 días";
            break;
            case "febrero":
                if($anio % 400 == 0){
                print "$mes tiene 29 días";
            }else if($anio % 4 == 0 && $anio % 100 != 0){
                print "$mes tiene 29 días";
            }else{
                print "$mes tiene 28 días";
            }
            break;
        case "marzo":
            print "$mes tiene 31 días";
            break;
        case "abril":
            print "$mes tiene 30 días";
            break;
        case "mayo":
            print "$mes tiene 31 días";
            break;
        case "junio":
            print "$mes tiene 30 días";
            break;
        case "julio":
            print "$mes tiene 30 días";
            break;
        case "agosto":
            print "$mes tiene 31 días";
            break;
        case "septiembre":
            print "$mes tiene 30 días";
            break;
        case "octubre":
            print "$mes tiene 31 días";
            break;
        case "noviembre":
            print "$mes tiene 30 días";
            break;
        case "diciembre":
            print "$mes tiene 31 días";
            break;
        default:
            print "Introduzca un mes conrrecto";
    }
?>