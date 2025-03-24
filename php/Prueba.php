<?php
$contraseña_original = "123";  // La contraseña que deseas probar
$hash_nuevo = password_hash($contraseña_original, PASSWORD_BCRYPT);

echo "🔹 Contraseña original: [$contraseña_original]<br>";
echo "🔹 Nuevo hash generado: [$hash_nuevo]<br>";
?>