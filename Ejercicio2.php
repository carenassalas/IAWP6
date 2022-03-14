<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio2</title> 
</head>
<body>
<h2>Notas Pasadas</h2>
<form action="#" method="post">
	<label for="aso">ASO: </label><input type="number" name="aso"></input>
	<label for="iaw">IAW: </label><input type="number" name="iaw"></input>
	<label for="asgbd">ASGBD: </label><input type="number" name="asgbd"></input>
	<label for="sri">SRI: </label><input type="number" name="sri"></input>
	<input type="submit"></input>
</form>
<?php
/*Crea un formulario donde se pidan las notas que has sacado en
todas las asignaturas del curso. En la página PHP que recoge los datos, mostrar
por pantalla la media de las notas y si todas las asignaturas están aprobadas.*/
$notas = array();
$notas[] = $_POST["aso"];
$notas[] = $_POST["iaw"];
$notas[] = $_POST["asgbd"];
$notas[] = $_POST["sri"];
$media = array_sum($notas) / count($notas);
echo "<h2>La nota media es $media</h2>";

$aprobadas = TRUE;
for ($i = 0; $i < count($notas); $i++) {
    if ($notas[$i] <5) {
        $aprobadas = FALSE;
    }
}
if ($aprobadas) {
    echo "<h2>Has aprobado todo</h2>";
}else {
    echo "<h2>No has aprobado todo</h2>";
}

?>
</body>
</html>