
<?php
/*Crea un script que guarde una cookie con el nombre de usuario y
lo muestre por pantalla.*/
if(isset($_POST["nombre"])){
    setcookie("nombre", $_POST["nombre"]);
    
    $nombre = $_POST["nombre"];
    echo "<h2>Bienvenido $nombre</h2>";
}


?>