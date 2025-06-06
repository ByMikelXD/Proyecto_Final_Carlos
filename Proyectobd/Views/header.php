<header class="main-header">
  <div class="header-top">
    <div class="header-content">
      <img src="img/Hot-Wheels-Logo.png" alt="Hot Wheels Logo" class="logo">
      <h1>Hotwheels Velocidad a tope</h1>
    </div>

    <div class="user-actions">
  <?php if (isset($_SESSION['usuario_id'])): ?>
      <span>👤 <?= htmlspecialchars($_SESSION['usuario_nombre']) ?></span>
      <a href="index.php?Controllers=UserController&action=logout">Cerrar sesión</a>
  <?php else: ?>
      <a href="index.php?Controllers=UserController&action=mostrarLogin">Login</a>
      <a href="index.php?Controllers=UserController&action=mostrarRegistro">Registro</a>
  <?php endif; ?>
    </div>
  </div>

  <nav class="main-nav">
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="index.php?Controllers=EventosController&action=listarEventosInscritos">Mis Eventos</a></li>
      <li><a href="index.php?Controllers=EventosController&action=listarEventosDisponibles" class="btn-ver-eventos">Ver todos los eventos disponibles</a></li>
    </ul>
  </nav>
</header>

<style>
/* Header general */
.main-header {
  background: linear-gradient(to bottom, red 50%, black 100%);
  color: #fff;
  padding: 15px 20px;
}

/* Top area: logo + título + bienvenida */
.header-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

/* Logo y título */
.header-content {
  display: flex;
  align-items: center;
  gap: 15px;
}

.logo {
  width: 100px;
  height: auto;
}

.main-header h1 {
  font-size: 28px;
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Bloque bienvenida */
.user-actions {
  text-align: right;
}

.welcome-msg {
  margin: 0 0 5px;
  font-weight: bold;
}

.user-actions button {
  padding: 8px 14px;
  margin: 5px 5px 0 0;
  font-size: 14px;
  border: none;
  background-color: #fff;
  color: #000;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.user-actions button:hover {
  background-color: #000;
  color: #fff;
}

/* Navegación */
.main-nav ul {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin-top: 15px;
}

.main-nav ul li {
  margin: 0 10px;
}

.main-nav ul li a {
  color: #fff;
  text-decoration: none;
  padding: 8px 16px;
  border-radius: 5px;
  transition: background 0.3s ease;
}

.main-nav ul li a:hover {
  background-color: #fff;
  color: #000;
}

/* Responsive */
@media (max-width: 768px) {
  .header-top {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .header-content {
    flex-direction: column;
  }

  .main-header h1 {
    font-size: 22px;
    margin-top: 10px;
  }

  .user-actions {
    margin-top: 10px;
  }

  .main-nav ul {
    flex-direction: column;
    margin-top: 10px;
  }

  .main-nav ul li {
    margin: 5px 0;
  }
}
</style>