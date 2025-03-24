<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Paciente</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/qrInfo.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../img/logo.png" alt="Logo" width="200" height="40" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>

<div id="contenedor-formulario">
    <div class="form-container">
        <h2 id="Info">Información del Usuario</h2>
        <form id="form-usuario">
            <div class="form-row">
                <label class="form-label">Nombre:</label>
                <div class="form-value">Juan</div>
            </div>
            
            <div class="form-row">
                <label class="form-label">Apellido:</label>
                <div class="form-value">Pérez</div>
            </div>
            
            <div class="form-row">
                <label class="form-label">Enfermedad:</label>
                <div class="form-value">Diabetes</div>
            </div>
            
            <div class="form-row">
                <label class="form-label">Teléfono:</label>
                <div class="form-value">987654321</div>
            </div>
            
            <div class="form-row">
                <label class="form-label">Teléfono de Emergencia:</label>
                <div class="form-value">123456789</div>
            </div>
        </form>
    </div>
</div>

<!-- 🛑 QR generado dinámicamente -->
<div class="qr-container">
    <h3>Escanea este QR para acceder a la información</h3>
    <img src="../php/generarQr.php" alt="Código QR del Paciente">
</div>

<div class="button-container-right">
    <div class="button-oval-container">
        <div class="button-group">
            <button id="btn-emergencia" class="button-llamar" onclick="window.location.href='tel:911'">
                <i class="fa fa-phone"></i>
            </button>
        </div>
        <div class="button-group">
            <button id="btn-emergencia" class="button-llamar" onclick="window.location.href='tel:911'">
                <i class="fa fa-phone"></i>
            </button>
        </div>
    </div>
</div>

</body>
</html>