<?php
include_once ('Controllers/ProductosController.php');

if (isset($_REQUEST['action']) && isset($_REQUEST['Controllers'])) {
    $act = $_REQUEST['action'];
    $cont = $_REQUEST['Controllers'];
    $controller = new $cont();
    $controller->$act();
} else {
    View::show('principal'); // Mejor llamar a través del sistema de vistas
}
?>
