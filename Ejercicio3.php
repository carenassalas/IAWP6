<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio3</title> 
</head>
<body>
<h2>Ejercicio3</h2>
<form action="#" method="post">
	<label for="numero1">Numero1: </label><input type="number" name="numero1"></input>
	<label for="numero2">Numero2: </label><input type="number" name="numero2"></input>
	<label for="calculo">Calculo: </label>
		<select name="calculo">
			<option value="suma">Sumar</option>
			<option value="resta">Restar</option>
			<option value="mult">Multiplicar</option>
		</select>
		</br>
	<input type="submit"></input>
</form>
<?php
/*Crea un formulario que recoja dos números y una posible
operación (suma, resta y multiplica), y que en función de la operación elegida
devuelva el resultado de la operación.
*/
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$calculo = $_POST["calculo"];
$resultado = 0;

switch ($calculo) {
    case "suma":
        $resultado = $numero1 + $numero2;
    break;
    case "resta":
        $resultado = $numero1 - $numero2;
    break;
    case "mult":
        $resultado = $numero1 * $numero2;
    break;
}

echo "<h2>El resultado es $resultado</h2>"
?>
</body>
</html>