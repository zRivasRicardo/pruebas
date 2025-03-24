<?php
include('conexion.php');

// Verificamos si el botón de "Iniciar sesión" fue presionado
if (!empty($_POST["btnIngresar"])) {
    echo '<div>LOS CAMPOS ESTÁN VACÍOS</div>';
} else {
    // Recuperamos el correo y la contraseña ingresada desde el formulario
    $CORREO = $_POST["CORREO"];
    $CONTRASENA = $_POST["CONTRASENA"];

    // Consulta preparada para obtener el hash de la contraseña desde la base de datos
    $SQL = $conexion->prepare("SELECT CONTRASENA FROM USUARIO WHERE CORREO = ?");
    $SQL->bind_param("s", $CORREO);
    $SQL->execute();
    $SQL->bind_result($hash_bd);
    $SQL->fetch();
    $SQL->close();


    if ($hash_bd && password_verify($CONTRASENA, $hash_bd)) {
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../login/login.php?error=invalid");
        exit();
        

    }
}
?>