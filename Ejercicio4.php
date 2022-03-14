<?php
/*Crea un contador de visitas a la página usando una 
“cookie”. A cada visita mostrará la “cookie” y actualizará su valor.
*/
$contador = 0;

if(isset($_COOKIE["contador"])){
    /*Guardamos la fecha en la cookie*/
    $contador = $_COOKIE["contador"];
       
}

$contador++;

setcookie("contador", $contador);

echo "Has entrado en la pagina $contador veces"


?>