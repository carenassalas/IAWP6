<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
/*Crea un formulario dividido en varias páginas. En la primera página
el formulario pedirá el nombre, en la segunda el apellido, y en la tercera página
mostrará el nombre y el apellido.*/
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
echo "<h2>Bienvenido $nombre $apellido</h2>";

?>

</html>