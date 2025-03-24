<?php
include('../libs/phpqrcode/qrlib.php'); 

$url = "https://tudominio.com/paginas/qrInfo.php"; // Cambia esto con la URL real de tu página

$directorio = "../qr/";
if (!file_exists($directorio)) {
    mkdir($directorio, 0777, true);
}

// Nombre del archivo QR
$archivoQR = $directorio . "qr_paciente.png";

// Generar el código QR
QRcode::png($url, $archivoQR, QR_ECLEVEL_L, 10, 2);

// Devolver la imagen del QR
header("Content-Type: image/png");
readfile($archivoQR);
?>