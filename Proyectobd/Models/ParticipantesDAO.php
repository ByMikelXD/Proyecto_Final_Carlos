<?php
require_once("Database/Database.php");

class ParticipantesDAO {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllParticipantes() {
        $sql = "SELECT id, nombre, apellido FROM usuarios WHERE rol = 'usuario'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

