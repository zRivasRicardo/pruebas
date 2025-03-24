<?php
$host = 'b6ohe4ckuuho35k2pmtn-mysql.services.clever-cloud.com';  
$usuario = 'utyczcv4wkxhajqg';    
$contraseña = 'B3q1gDjoA72HLWBhwQSY';     
$baseDeDatos = 'b6ohe4ckuuho35k2pmtn';  

$conexion = new mysqli($host, $usuario, $contraseña, $baseDeDatos);

// Verificar la conexión
if ($conexion->connect_error) {
    error_log("Conexión fallida: " . $conexion->connect_error, 3, "errores.log");
    die("Error de conexión a la base de datos");
}
?>