<?php
include('conexion.php');

function registrarUsuario($correo, $contraseña) {
    global $conexion;
    
    // Asegúrate de que las variables estén correctamente escapadas para evitar inyecciones SQL
    $correo = $conexion->real_escape_string($correo);
    $contraseñaHash = password_hash($contraseña, PASSWORD_DEFAULT); // Crear un hash de la contraseña

    // Verificar si el correo ya está registrado
    $query = "SELECT * FROM USUARIO WHERE CORREO = '$correo'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        // Si el correo ya está registrado
        return "El correo ya está registrado. Por favor intente con otro.";
    } else {
        // Insertar usuario en la base de datos
        $query = "INSERT INTO USUARIO (CORREO, CONTRASENA) VALUES ('$correo', '$contraseñaHash')";
        
        if ($conexion->query($query)) {
            return "Registro exitoso";
        } else {
            return "Error al registrar el usuario: " . $conexion->error;
        }
    }
}
?>