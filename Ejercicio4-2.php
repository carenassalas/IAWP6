<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio1</title> 
</head>
<body>
<h2>Introducir credenciales</h2>
<form action="Ejercicio4.php" method="post">
	<input type="hidden" name="nombre" value="
	<?php echo $_POST["nombre"];
	/*Se procede en este formulario a obtener el nombre del formulario anterior y guardarlo en 
	 * invisible para despues pasarlo junto al apellido al código php inicial*/
	?>"></input>
	
	<label for="apellido">Apellido: </label><input type="text" name="apellido"></input>
	<input type="submit"></input>
</form>
</body>
</html>