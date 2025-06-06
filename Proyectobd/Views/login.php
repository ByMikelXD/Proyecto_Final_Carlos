<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color:rgb(252, 253, 255);
      font-family: Arial, sans-serif;
      min-height: 100vh;
      justify-content: center;
      align-items: center;
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

    .title {
      text-align: center;
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }

    .form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .input-group label {
      color:rgb(252, 252, 252);
      font-size: 0.875rem;
      margin-bottom: 0.25rem;
    }

    .input-group input {
      width: 100%;
      padding: 0.75rem;
      border-radius: 0.375rem;
      border: 1px solid #374151;
      background-color: #111827;
      color: #f3f4f6;
    }

    .input-group input:focus {
      border-color: #a78bfa;
      outline: none;
    }

    .sign {
      background-color: #a78bfa;
      color: #111827;
      font-weight: 600;
      padding: 0.75rem;
      border: none;
      border-radius: 0.375rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .sign:hover {
      background-color: #8b5cf6;
    }

    .signup {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.875rem;
    }

    .signup a {
      color: #f3f4f6;
      text-decoration: none;
    }

    .signup a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <p class="title">Login</p>
    <form class="form" method="POST" action="index.php?Controllers=UserController&action=login">
      <div class="input-group">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="input-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
      </div>
      <button class="sign" type="submit">Login</button>
    </form>
    <p class="signup">
      ¿No tienes cuenta? <a href="index.php?Controllers=UserController&action=mostrarRegistro">Registrarse</a>
    </p>
  </div>
</body>
</html>
