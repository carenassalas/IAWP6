<?php
/*Crea una función llamada agregar_nota($array, $nota) , que recibe
un array con notas y devuelve el mismo array con el segundo parámetro
agregado al final.*/
/*Misma funcion del ejercicio anterior*/
function notas_aleatorias($size) {
    $notas = array();
    for ($i = 0; $i < $size; $i++) {
        $notas[$i] = rand(0, 50);
    }
    return $notas;
}
function agregar_nota($array, $nota) {/*Funcion que agrega una nota al array existente*/
    $array[] = $nota;
    return $array;
}
$notas = notas_aleatorias(8);
$otra_nota = agregar_nota($notas, 9);
for ($i = 0; $i < count($otra_nota); $i++) {
    echo $otra_nota[$i] . "<br>";
}