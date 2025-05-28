<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Usuario</title>
  <style>
    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: #1f2937;
      padding: 30px;
      border-radius: 10px;
      color: #fff;
      width: 350px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .input-group {
      margin-bottom: 15px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #cbd5e1;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #374151;
      color: #fff;
    }

    .input-group input:focus {
      outline: 2px solid #a78bfa;
    }

    .submit-btn {
      width: 100%;
      padding: 10px;
      background-color: #a78bfa;
      border: none;
      border-radius: 5px;
      color: #111827;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    .submit-btn:hover {
      background-color: #8b5cf6;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Registro</h2>
    <form action="index.php?Controllers=UserController&action=registro" method="POST">
      <div class="input-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
      </div>

      <div class="input-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required>
      </div>

      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="input-group">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" required>
      </div>

      <div class="input-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
      </div>

      <button type="submit" class="submit-btn">Registrarse</button>
    </form>
  </div>

</body>
</html>

