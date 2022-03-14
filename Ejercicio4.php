<?php
/*Crea una función llamada notas_aprobadas($array) que recibe un
array de notas y devuelve otro array con las notas aprobadas
*/
/*Misma funcion del ejercicio anterior*/
function notas_aleatorias($size) {
    $notas = array();
    for ($i = 0; $i < $size; $i++) {
        $notas[$i] = rand(0, 50);
    }
    return $notas;
}
/*Mediante esta funcion declaramos en un array aquellos valores por encima de 25(aprobadas)*/
function notas_aprobadas($array) {
    $aprobadas = array();
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] >= 25) {
            $aprobadas[] = $array[$i];
        }
    }
    return $aprobadas;
}
$notas = notas_aleatorias(10);
$notas_aprobadas = notas_aprobadas($notas);
for ($i = 0; $i < count($notas_aprobadas); $i++) {
    echo $notas_aprobadas[$i] . "<br>";
}