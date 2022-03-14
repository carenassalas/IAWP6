<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio1</title> 
</head>
<body>
<h2>Introducir credenciales</h2>
<form action="#" method="post">
	<label for="nombre">Nombre: </label><input type="text" name="nombre"></input>
	<label for="apellido">Apellido: </label><input type="text" name="apellido"></input>
	<input type="submit"></input>
</form>
<?php
/*Crea un formulario en el que el usuario escribirá su nombre y su
apellido. Al enviar el formulario se abrirá la página bienvenida.php donde
aparecerá un mensaje de bienvenida al usuario (por ejemplo: “Bienvenido, Javier
Escudero”).*/
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
echo "<h2>Bienvenido $nombre $apellido</h2>";

?>
</body>
</html>