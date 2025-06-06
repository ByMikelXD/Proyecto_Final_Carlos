<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro de Usuario</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-container {
      max-width: 400px;
      margin: 30px auto;
      padding: 25px 30px;
      background-color: #111827;
      border-radius: 12px;
      color:white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }.

    .form-container h2 {
      text-align: center;
      font-size: 1.75rem;
      font-weight: bold;
      margin-bottom: 1.5rem;
    }

    .input-group {
      margin-bottom: 1rem;
    }

    .input-group label {
      display: block;
      color:rgb(241, 241, 243);
      margin-bottom: 6px;
      font-size: 0.9rem;
    }

    .input-group input {
      width: 100%;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      border: 1px solid #374151;
      background-color: #1f2937;
      color: #f3f4f6;
      font-size: 1rem;
    }

    .input-group input:focus {
      border-color: #a78bfa;
      outline: none;
    }

    .submit-btn {
      width: 100%;
      background-color: #a78bfa;
      padding: 0.75rem;
      text-align: center;
      color: #111827;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s;
    }

    .submit-btn:hover {
      background-color: #8b5cf6;
    }

    @media (max-width: 480px) {
      .form-container {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Registro</h2>
    <form action="index.php?Controllers=UserController&action=registro" method="POST">
      <div class="input-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required />
      </div>
      <div class="input-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required />
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
      </div>
      <div class="input-group">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" required />
      </div>
      <div class="input-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required />
      </div>
      <button type="submit" class="submit-btn">Registrarse</button>
    </form>
  </div>

</body>
</html>
