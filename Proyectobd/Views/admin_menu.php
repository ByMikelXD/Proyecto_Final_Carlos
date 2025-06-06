<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 20px;
        }

        .admin-container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h1 {
            color: #4b5563;
        }

        .admin-links a {
            display: inline-block;
            margin: 10px 15px;
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
        }

        .admin-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <h1>Bienvenido, Administrador</h1>
        <p>Desde aquí puedes gestionar el contenido del sitio.</p>

        <div class="admin-links">
            <a href="index.php?Controllers=AdminController&action=verUsuarios">Ver Usuarios</a>
            <a href="index.php?Controller=AdminController&action=verEventos">Ver Eventos</a>
            <a href="index.php?Controllers=UserController&action=logout">Cerrar Sesión</a>
            <a href="index.php?Controllers=EventosController&action=crear">Crear Evento</a>
        </div>
    </div>
</body>
</html>
