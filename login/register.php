<?php
// Verificación de registro exitoso para la alerta.
$mensaje = "";
if (isset($_GET['registro_exitoso']) && $_GET['registro_exitoso'] == 1) {
    $mensaje = "¡Usuario registrado exitosamente!";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/registro.js"></script>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <!-- Logo de la página -->
        <a class="navbar-brand" href="#">
            <img src="../img/logo.png" alt="Logo" width="100" height="40" class="d-inline-block align-text-top">
        </a>
    </div>
</nav>

<div id="contenedor-login" class="d-flex justify-content-center align-items-center">
    <div id="bienvenido" class="position-absolute text-center">
        <h1>¡Bienvenido!</h1>
        <h2>Adulto Mayor</h2>
    </div>

    <!-- Contenedor del formulario de registro -->
    <div class="login-container">
        <form method="POST" action="../php/loginRegistro.php" id="registro-form">
            <h2>Registro</h2>
            <label for="correo_registro">Correo electrónico</label>
            <input type="email" id="correo_registro" name="correo_registro" placeholder="Ingresa tu correo" required>

            <label for="contraseña_registro">Contraseña</label>
            <input type="password" id="contraseña_registro" name="contraseña_registro" placeholder="Ingresa tu contraseña" required>

            <label for="confirmar_contraseña">Confirmar Contraseña</label>
            <input type="password" id="confirmar_contraseña" name="confirmar_contraseña" placeholder="Confirma tu contraseña" required>

            <div class="button-container">
                <button type="submit" name="registrarse" id="login-btn">Registrarse</button>
                <a href="login.php" id="signup-btn">¿Ya tienes cuenta? Inicia sesión</a>
            </div>
        </form>
    </div>
</div>

<?php if ($mensaje) { ?>
<script>
    // Alerta de registro exitoso
    document.addEventListener("DOMContentLoaded", function() {
        var alertDiv = document.createElement("div");
        alertDiv.classList.add("alert", "alert-success", "custom-alert");
        alertDiv.innerHTML = "<?php echo $mensaje; ?>";
        document.body.appendChild(alertDiv);

        setTimeout(function() {
            window.location.href = "login.php";  // Redirige a la página de login después de mostrar el mensaje
        }, 2000);  
    });
</script>
<?php } ?>

</body>
</html>