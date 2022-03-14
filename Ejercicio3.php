<?php
/*Crea un script que guarde una cookie con la fecha y que indique
al usuario la última vez que se conectó.
*/
if(isset($_COOKIE["fecha"])){
    /*Guardamos la fecha en la cookie*/
    $fecha = $_COOKIE["fecha"];
    
    echo "<h2>La ultima conexion fue: $fecha</h2>";
    
}else {
    /*En caso de no habernos conectado nunca aparecerá el siguiente mensaje*/
    echo "Nunca te conectaste";
}
setcookie("fecha", date("d/m/y h:i:s"));


?>