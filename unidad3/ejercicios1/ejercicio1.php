<!-- Autor Joaquín Baena Salas
1. Almacena tres números en variables y escribirlos
en pantalla de manera ordenada. -->
<?php
    $num1 = 1;
    $num2 = 5;
    $num3 = 3;
    if ($num1 > $num2){
        if ($num2 > $num3) {
            print "$num1 > $num2 > $num3";
        } else{
            print "$num1 > $num3 > $num2";
        }
    }
    else if($num2 > $num3){
        if ($num1 > $num3){
            print "$num2 > $num1 > $num3";
        }else{
            print "$num2 > $num3 > $num1";
        }
    } else{
        if($num1 > $num2){
            print "$num3 > $num1 > $num2";
        }else{
            print "$num3 > $num2 > $num1";
        }
    }
?>