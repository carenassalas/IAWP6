<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
/*Crea un formulario dividido en varias páginas. En la primera página
el formulario pedirá el nombre, en la segunda el apellido, y en la tercera página
mostrará el nombre y el apellido.*/

/*
 Se obtiene el equipo deseado y a partir del equipo definimos un color para el navegador*/

$equipo = $_POST["equipos"];
$fondo = "white";

switch ($equipo){
    case "Betis":
        $fondo = "green";
        break;
    case "Villareal":
        $fondo = "yellow";
        break;
    case "Sevilla":
        $fondo = "red";
        break;
    case "Barcelona":
        $fondo = "purple";
        break;      
}
?>

<body style="background-color: <?php echo $fondo;?>;"></body>

</html>