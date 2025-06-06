<?php

include('Views/View.php');

class AdminController {

    public function dashboard() {
        // No repetir session_start, solo si no está activa
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
            echo "<p style='color:red;'>❌ Acceso denegado. No eres administrador.</p>";
            return;
        }

        View::show("admin_menu");
    }

    public function verEventos() {
        // Solo iniciar sesión si no está activa
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
            echo "<p style='color:red;'>❌ Acceso denegado. No eres administrador.</p>";
            return;
        }

        // Usar require_once para evitar múltiples inclusiones
        require_once('Models/eventosDAO.php');
        $dao = new EventosDAO();
        $eventos = $dao->getTodosLosEventos();

        // Pasar datos como array para compatibilidad con la view
        View::show("admin_eventos", ['eventos' => $eventos]);
    }

    public function verUsuarios() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
            echo "<p style='color:red;'>❌ Acceso denegado.</p>";
            return;
        }

        require_once('Models/UsuariosDAO.php');
        $dao = new UsuariosDAO();
        $usuarios = $dao->getAllUsers();

        View::show("lista_usuarios", ['usuarios' => $usuarios]);
    }
}