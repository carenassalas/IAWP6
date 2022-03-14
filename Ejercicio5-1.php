<?php
/*
Crea un formulario en el que el usuario escribirá su nombre 
y su apellido. Al enviar el formulario se abrirá la página “bienvenida.php” donde se 
guardarán en dos “cookies”. Mostrar por pantalla un mensaje de bienvenida al usuario 
(por ejemplo: “Bienvenido, Javier Escudero”) si existen las “cookies”.*/

if(isset($_POST["nombre"]) && isset($_POST["apellido"])){
    /*Capturamos el nombre y apellido y los almacenamos en las cookies*/
    setcookie("nombre", $_POST["nombre"]);
    setcookie("apellido", $_POST["apellido"]);
    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    
    echo "<h2>Bienvenido $nombre $apellido</h2>";
    
}else {
    
    $nombre = $_COOKIE["nombre"];
    $apellido = $_COOKIE["apellido"];

    echo "Holaa de nuevo, $nombre $apellido";
}
?>