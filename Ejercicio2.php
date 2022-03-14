<?php
/*
 Crea un procedimiento llamado estadisticas($array) . El
procedimiento recibirá un array de notas por parámetro e imprimirá por pantalla
la nota máxima, la mínima y la media.
*/
/*Misma funcion del ejercicio anterior*/
function notas_aleatorias($size) {
    $notas = array();
    for ($i = 0; $i < $size; $i++) {
        $notas[$i] = rand(0, 50);
    }
    return $notas;
}
/*Creamos una funcion para determinar el elemento maximo, minimo y media del array*/
function estadisticas($array) {
    $maxima = max($array);
    $minima = min($array);
    $media = array_sum($array) / count($array);
    echo "Maxima: " . $maxima . "<br>";
    echo "Minima: " . $minima . "<br>";
    echo "Media: " . $media . "<br>";
}
$notas = notas_aleatorias(10);
estadisticas($notas);