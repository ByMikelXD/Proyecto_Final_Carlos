<?php
include_once('Views/View.php');
include_once('Controllers/EventosController.php');
include_once('Controllers/UserController.php');
include_once('Controllers/adminController.php');
include_once('Controllers/ProductosController.php');

if (isset($_REQUEST['action']) && isset($_REQUEST['Controllers'])) {
    $act = $_REQUEST['action'];
    $cont = $_REQUEST['Controllers'];
    
    if (class_exists($cont)) {
        $controller = new $cont();
        if (method_exists($controller, $act)) {
            $controller->$act();
        } else {
            echo "Acción no encontrada.";
        }
    } else {
        echo "Controlador no encontrado.";
    }
} else {
    View::show('principal');
}
