<?php


include ('Models/productos.php');

include ('Views/View.php');

class ProductController {

    public function getAllProducts (){
        require_once ("Models/productos.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("listaproductos", $products);
    }

    public function agregarProducto() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
        echo "<p style='color:red;'>❌ Acceso denegado. Solo el administrador puede agregar productos.</p>";
        return;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $pDAO = new ProductoDAO();
        $exito = $pDAO->insertarProducto($nombre, $descripcion, $precio, $stock);

        if ($exito) {
            echo "<p style='color:green;'>✅ Producto agregado correctamente.</p>";
        } else {
            echo "<p style='color:red;'>❌ Error al agregar producto.</p>";
        }
    }

    View::show("agregarproducto");
}

}

?>