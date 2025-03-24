<?php
include('conexion.php');
include('registroFun.php');

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['registrarse'])) {
        $correo = $_POST['correo_registro'];
        $contraseña = $_POST['contraseña_registro'];
        $confirmarContraseña = $_POST['confirmar_contraseña'];

        // Comparación de contraseñas
        if ($contraseña === $confirmarContraseña) {
            // Intentar registrar el usuario
            $resultado = registrarUsuario($correo, $contraseña);
            if ($resultado == "Registro exitoso") {
                // Si el registro es exitoso, redirige al usuario
                header("Location: ../login/register.php?registro_exitoso=1");
                exit();
            } else {
                $mensaje = $resultado;
            }
        } else {
            $mensaje = "Las contraseñas no coinciden.";
        }
    }
}
?>