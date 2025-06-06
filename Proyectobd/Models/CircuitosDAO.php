<?php
require_once("Database/Database.php");

class CircuitosDAO {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllCircuitos() {
        $sql = "SELECT * FROM circuitos ORDER BY fecha ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
