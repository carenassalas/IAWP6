<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio5</title> 
</head>
<body>
<h2>Equipos</h2>
<!-- Se procede a crear formulario para seleccionar entre varios 
equipo. Una vez seleccionado el equipo se envía al documento php -->
<form action="Ejercicio5-1.php" method="post">
	<label for="equipos">Equipos: </label>
		<select name="equipos">
			<option value="Betis">Betis</option>
			<option value="Villareal">Villareal</option>
			<option value="Sevilla">Sevilla</option>
			<option value="Barcelona">Barcelona</option>		
		</select>
	<input type="submit"></input>
</form>
</body>
</html>