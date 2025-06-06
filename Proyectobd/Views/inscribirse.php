<?php
// Recibe por $data['mensaje'] un texto para mostrar resultado de la inscripción
$mensaje = $data['mensaje'] ?? '';
$esError = $data['error'] ?? false;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Inscripción a Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        .mensaje {
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            max-width: 500px;
        }
        .exito {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Resultado de la Inscripción</h1>

    <?php if ($mensaje): ?>
        <div class="mensaje <?= $esError ? 'error' : 'exito' ?>">
            <?= htmlspecialchars($mensaje) ?>
        </div>
    <?php endif; ?>

    <p><a href="index.php?Controllers=EventosController&action=listarEventosDisponibles">Volver a Eventos Disponibles</a></p>

</body>
</html>
