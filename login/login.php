


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="../css/login.css" rel="stylesheet">
    <script src="../js/login.js"></script> 
</head>
<body>

<?php 
        include("../php/conexion.php");

    ?>





<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../img/logo.png" alt="Logo" width="200" height="40" class="d-inline-block align-text-top">

    </a>
  </div>
</nav>


<div id="contenedor-login" class="d-flex justify-content-center align-items-center">
    
    <div id="bienvenido" class="position-absolute left-0 ml-4 text-center">
        <h1>¡Bienvenido!</h1>
        <h2>Adulto Mayor</h2>
    </div>

  

    <!-- Contenedor del formulario -->
    <div class="login-container">
        <form action="../php/loginFun.php" method="POST" id="login-form">
            <h2>Iniciar sesión</h2>
            <label for="email">Correo</label>
            <input type="email" id="email" name="CORREO" placeholder="Ingresa tu correo" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="CONTRASENA" placeholder="Ingresa tu contraseña" required>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Recordarme</label>
            </div>

            <div class="button-container">
                <button type="submit" name='btnIngresar' id="login-btn">Entrar</button>
                <button type="button" id="signup-btn" onclick="window.location.href='register.php'">Registrarse</button>
                </div>
        </form>

        
    </div>



</div>

<script>
    <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid') { ?>
        $(document).ready(function() {
            var alertDiv = $('<div class="alert alert-danger mt-3">Credenciales Invalidas</div>');
            $('#contenedor-login').append(alertDiv); // Lo agregamos al contenedor de login
            setTimeout(function() {
                alertDiv.fadeOut();
            }, 3000);
        });
    <?php } ?>
</script>


</body>
</html>