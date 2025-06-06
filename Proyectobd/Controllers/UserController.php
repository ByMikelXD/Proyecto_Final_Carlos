<?php

session_start();

include('Models/UsuariosDAO.php');
include('Views/view.php');

class UserController {

    public function mostrarLogin() {
        View::show("login");
    }

    public function mostrarRegistro() {
        View::show("registro");
    }

    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $dao = new UsuariosDAO();
        $usuario = $dao->getUserByEmail($email);

        if ($usuario && $password == ($usuario['password'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['rol'] = $usuario['rol'];

            if ($usuario['rol'] === 'admin') {
                header("Location: index.php?Controllers=AdminController&action=dashboard");
            } else {
                header("Location: index.php?Controllers=UserController&action=verEventosDelUsuario");
            }

            exit;

        } else {
            echo "<p style='color:red;'>❌ Credenciales incorrectas.</p>";
            View::show("login");
        }
    }

    public function verEventosDelUsuario() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['usuario_id'])) {
        header("Location: index.php?Controllers=UserController&action=mostrarLogin");
        exit;
    }

    $usuario_id = $_SESSION['usuario_id'];
    $dao = new EventosDAO();

    $eventos = $dao->getEventosPorUsuario($usuario_id);

    View::show('eventos_usuario', ['data' => $eventos]);
}


    public function registro() {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $password = $_POST['password'];

        $dao = new UsuariosDAO();
        $exito = $dao->registrarUsuario($nombre, $apellido, $email, $direccion, $password);

        if ($exito) {
            echo "<p style='color:green;'>✅ Registro exitoso. Ahora puedes iniciar sesión.</p>";
            View::show("login");
        } else {
            echo "<p style='color:red;'>❌ Error al registrar. Quizás el email ya esté en uso.</p>";
            View::show("registro");
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
        exit;
    }
    
}
?>
