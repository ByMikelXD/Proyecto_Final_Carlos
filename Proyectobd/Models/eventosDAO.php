<?php
require_once('Database/Database.php');

class EventosDAO {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

   public function getEventosDisponibles($usuario_id) {
    $sql = "
        SELECT c.id, c.nombre, c.fecha, c.ubicacion
        FROM circuitos c
        WHERE c.id NOT IN (
            SELECT e.circuito_id
            FROM eventos e
            WHERE e.usuario_id = :usuario_id
        )
        ORDER BY c.fecha ASC
    ";

    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(':usuario_id', $usuario_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}


public function getEventosConParticipantes() {
    $sql = "
        SELECT e.id, c.nombre AS circuito, c.fecha, c.ubicacion, u.nombre AS participante, u.apellido
        FROM eventos e
        JOIN circuitos c ON e.circuito_id = c.id
        JOIN usuarios u ON e.usuario_id = u.id
        ORDER BY c.fecha ASC
    ";

    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}


    public function getTodosLosEventos() {
        $sql = "
            SELECT e.id, e.nombre AS evento_nombre, c.nombre AS circuito, c.ubicacion, c.fecha
            FROM eventos e
            LEFT JOIN circuitos c ON e.circuito_id = c.id
            ORDER BY c.fecha ASC
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insertarEvento($circuito_id, $participante_id) {
        $sql = "INSERT INTO eventos (circuito_id, usuario_id) VALUES (?, ?)"; // Cambié participante_id por usuario_id según tabla
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$circuito_id, $participante_id]);
    }

    public function getEventoPorId($eventoId) {
    $sql = "
        SELECT c.nombre, c.ubicacion, c.fecha, c.descripcion
        FROM eventos e
        JOIN circuitos c ON e.circuito_id = c.id
        WHERE e.id = ?
        LIMIT 1
    ";

    $stmt = $this->db->prepare($sql);
    $stmt->execute([$eventoId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}



    public function usuarioYaInscrito($usuario_id, $evento_id) {
        $sql = "SELECT COUNT(*) FROM inscripciones WHERE usuario_id = ? AND evento_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$usuario_id, $evento_id]);
        return $stmt->fetchColumn() > 0;
    }

    public function inscribirUsuario($usuario_id, $evento_id) {
        $sql = "INSERT INTO inscripciones (usuario_id, evento_id) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$usuario_id, $evento_id]);
    }

   public function getEventosPorUsuario($usuario_id) {
    $sql = "
        SELECT c.id, c.nombre AS circuito, c.fecha
        FROM inscripciones i
        JOIN circuitos c ON i.evento_id = c.id
        WHERE i.usuario_id = :usuario_id
    ";

    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}