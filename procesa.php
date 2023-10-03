<?php

$usuario = $_POST["login"];
$clave = $_POST["clave"];

if (($usuario != null) && ($clave != null)){
    if (($usuario == 'admin') && ($clave == 1234)){
        echo "<p>¡Perfecto! Datos correctos";
    } else{
        echo "<p>El usuario o contraseña son incorrectos";
    }
    echo "<p>Ingresaste un valor</p>";
} else {
    echo "<p>Debes colocar un valor</p>";
}

?>