<?php

$host = "localhost";
$usuario= "utacapul_systesto";
$contraseña = "utacapul_systesto";

try {
   $conexion = new PDO("mysql:host=$host;dbname=utacapul_bd_systesto", $usuario, $contraseña);
   $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return$conexion;
    }
catch(PDOException $error)
    {
    echo "No se pudo conectar a la BD: " . $error->getMessage();
    }

?>