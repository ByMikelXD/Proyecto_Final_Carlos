<?php

require_once('Database/Database.php');

class UsuarioDAO {

    public function registrarUsuario($nombre, $apellido, $email, $direccion) {
        try {
            $conexion = Conexion::conectar();

            $sql = "INSERT INTO usuarios (nombre, apellido, email, direccion) VALUES (?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);

            return $stmt->execute([$nombre, $apellido, $email, $direccion]);

        } catch (PDOException $e) {
            error_log("Error al registrar usuario: " . $e->getMessage());
            return false;
        }
    }

}
