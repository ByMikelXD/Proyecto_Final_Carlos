<?php
require_once('Database/Database.php');


class UsuariosDAO {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function registrarUsuario($nombre, $apellido, $email, $direccion, $password) {
        $stmt = $this->db->prepare("INSERT INTO usuarios (nombre, apellido, email, direccion, password) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nombre, $apellido, $email, $direccion, $password]);
    }

    public function getUserByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUsers() {
    $stmt = $this->db->prepare("SELECT id, nombre, apellido, email, direccion, rol FROM usuarios");
    $stmt->execute();
    return $stmt->fetchAll();
}

}