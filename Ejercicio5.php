<?php
/*Crea un procedimiento llamado imprime_tabla($numero) . Si el
procedimiento recibe la cadena “todas”, se imprimirán por pantalla las tablas de
multiplicar del 1 al 10. En cambio, si recibe un número del 1 al 10 imprime la
tabla*/
function imprime_tabla($numero) {
    if ($numero == "todas") {
        for ($i = 0; $i < 10; $i++) {
            imprime_tabla($i + 1);
        };
    }elseif ($numero >= 1 && $numero <= 10){
        echo "Tabla del $numero <br>";
        for ($i = 0; $i < 10; $i++) {
            echo $numero . "x" . $i . "=" . $numero * $i . "<br>";
        }
            
    }
}
echo "Imprimir tabla del 5";
imprime_tabla(5);
echo "Imprimir todas las tablas";
imprime_tabla("todas");