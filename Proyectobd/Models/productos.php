<?php
// Incluir el archivo de conexión a la base de datos
require_once('Database/Database.php');

class ProductoDAO {
    // Atributo con la conexión a la BBDD
    private $db_con;

    // Constructor que inicializa la conexión a la BBDD
    public function __construct() {
        $this->db_con = Database::connect();

        if ($this->db_con === null) {
            die("❌ Error: No se pudo conectar a la base de datos.");
        }
    }

    // Método que devuelve un array con todos los productos existentes en la base de datos.
    public function getAllProducts() {
        $stmt = $this->db_con->prepare("SELECT * FROM productos");
        $stmt->execute();
        return $stmt->fetchAll(); // FETCH_ASSOC ya está definido en Database.php
    }

    public function getProductById($id) {
        $stmt = $this->db_con->prepare("SELECT * FROM productos WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>
