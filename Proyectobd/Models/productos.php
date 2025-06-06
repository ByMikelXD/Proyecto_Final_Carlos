<?php
require_once('Database/Database.php');

class ProductoDAO {
    private $db_con;

    public function __construct() {
        $this->db_con = Database::connect();

        if ($this->db_con === null) {
            die("❌ Error: No se pudo conectar a la base de datos.");
        }
    }

    public function getAllProducts() {
        $stmt = $this->db_con->prepare("SELECT * FROM productos");
        $stmt->execute();
        return $stmt->fetchAll();
    }

   public function insertarProducto($nombre, $descripcion, $precio, $stock) {
    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock) VALUES (?, ?, ?, ?)";
    $stmt = $this->db_con->prepare($sql);
    return $stmt->execute([$nombre, $descripcion, $precio, $stock]);
}

}
?>