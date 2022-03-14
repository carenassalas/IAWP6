<?php
/*
 Crea una función llamada notas_aleatorias($size) que recibe un
 número entero y devuelve un array de tamaño $size lleno de notas aleatorias.
 */
/*Creamos la funcion de forma cuando recibe un numero crea un array 
con ese tamaño y lo llena de numeros aleatorios hasta el 50*/
function notas_aleatorias($size) {
    $notas = array();
    for ($i = 0; $i < $size; $i++) {
        $notas[$i] = rand(0, 50);
    }
    return $notas;
}
/*Declaramos notas como 10 para que se cree un array de 10 elementos*/
$notas = notas_aleatorias(10);
for ($i = 0; $i < count($notas); $i++) {
    echo $notas[$i];
    echo "<br/>";
}
?>



