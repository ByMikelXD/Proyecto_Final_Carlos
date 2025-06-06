<?php
include('Views/View.php');
require_once("Models/eventosDAO.php");

class EventosController {

    public function listar() {
        $dao = new EventosDAO();
        $eventos = $dao->getEventosConParticipantes();
        View::show('eventos_disponibles', ['eventos' => $eventos]);
    }

    public function crear() {
        if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
            echo "<p style='color:red;'>❌ Acceso denegado.</p>";
            return;
        }

        require_once("Models/CircuitosDAO.php");
        require_once("Models/ParticipantesDAO.php");

        $circuitosDAO = new CircuitosDAO();
        $participantesDAO = new ParticipantesDAO();

        $data = [
            'circuitos' => $circuitosDAO->getAllCircuitos(),
            'participantes' => $participantesDAO->getAllParticipantes()
        ];

        View::show("crear_evento", $data);
    }

    public function guardarEvento() {
        if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
            echo "<p style='color:red;'>❌ No tienes permiso.</p>";
            return;
        }

        $circuito_id = $_POST['circuito_id'] ?? null;
        $usuario_id = $_POST['participante_id'] ?? null;

        if (!$circuito_id || !$usuario_id) {
            echo "<p style='color:red;'>Datos incompletos para crear evento.</p>";
            return;
        }

        $dao = new EventosDAO();
        $dao->insertarEvento($circuito_id, $usuario_id);

        header("Location: index.php?Controllers=EventosController&action=listar");
        exit;
    }

    public function verDetalle() {
        if (!isset($_GET['id'])) {
            echo "<p style='color:red;'>❌ ID del evento no especificado.</p>";
            return;
        }

        $eventoId = $_GET['id'];

        $dao = new EventosDAO();
        $evento = $dao->getEventoPorId($eventoId);

        if ($evento) {
            View::show("evento_detalle", ['evento' => $evento]);
        } else {
            echo "<p style='color:red;'>❌ Evento no encontrado.</p>";
        }
    }

    public function inscribirse() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['usuario_id'])) {
            header("Location: index.php?Controllers=UserController&action=mostrarLogin");
            exit;
        }

        if (!isset($_POST['evento_id']) || !is_numeric($_POST['evento_id'])) {
            $mensaje = "Evento no válido.";
            View::show('inscribirse', ['mensaje' => $mensaje, 'error' => true]);
            return;
        }

        $usuario_id = $_SESSION['usuario_id'];
        $evento_id = (int) $_POST['evento_id'];

        $dao = new EventosDAO();

        if ($dao->usuarioYaInscrito($usuario_id, $evento_id)) {
            $mensaje = "Ya estás inscrito en este evento.";
            View::show('inscribirse', ['mensaje' => $mensaje, 'error' => true]);
            return;
        }

        $exito = $dao->inscribirUsuario($usuario_id, $evento_id);

        if ($exito) {
            $mensaje = "Inscripción exitosa.";
            View::show('inscribirse', ['mensaje' => $mensaje, 'error' => false]);
        } else {
            $mensaje = "Hubo un error al inscribirte.";
            View::show('inscribirse', ['mensaje' => $mensaje, 'error' => true]);
        }
    }

    public function listarEventosDisponibles() {
        if (!isset($_SESSION['usuario_id'])) {
            header("Location: index.php?Controllers=UserController&action=mostrarLogin");
            exit;
        }

        $usuario_id = $_SESSION['usuario_id'];
        $dao = new EventosDAO();

        // Esta función debe devolver todos los eventos disponibles para inscripción,
        // por ejemplo, todos menos los ya inscritos por el usuario
        $eventos = $dao->getEventosDisponibles($usuario_id);

        View::show('eventos_disponibles', ['eventos' => $eventos]);
    }

    // Método para listar eventos donde el usuario está inscrito
    public function listarEventosInscritos() {
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

}