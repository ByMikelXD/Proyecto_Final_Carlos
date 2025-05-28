<?php

include ('Models/UsuariosDAO.php');
include ('Views/View.php');

class ProductController {

    public function getAllProducts (){
        require_once ("Models/productos.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("listaproductos", $products);
    }

    public function getProductById($id) {
        $pDAO = new ProductoDAO();
        $product = $pDAO->getProductById($id);
        $pDAO = null;
        View::show("producto_id", $product);
    }    

}

class UserController {

    public function mostrarLogin() {
        View::show("login");
    }

    public function mostrarRegistro() {
        View::show("registro");
    }

    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $dao = new UsuariosDAO();
        $usuario = $dao->getUserByEmail($email);
    
          // <--- Aquí pones el var_dump para ver qué trae
    
        exit;  // Detienes la ejecución para ver el resultado
    
        if ($usuario && $password == $usuario['password']) {
            session_start();
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            header("Location: index.php");
            exit;
        } else {
            echo "<p style='color:red;'>❌ Credenciales incorrectas.</p>";
            View::show("login");
        }
    }
    
    
    

    public function registro() {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $password = $_POST['password'];
    
        $dao = new UsuariosDAO();
        $exito = $dao->registrarUsuario($nombre, $apellido, $email, $direccion, $password);
    
        if ($exito) {
            echo "<p style='color:green;'>✅ Registro exitoso. Ahora puedes iniciar sesión.</p>";
            View::show("login");
        } else {
            echo "<p style='color:red;'>❌ Error al registrar. Quizás el email ya esté en uso.</p>";
            View::show("registro");
        }
    }
    
    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php");
    }
}
?>