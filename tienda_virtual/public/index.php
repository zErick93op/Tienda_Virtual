<?php
require_once '../app/controllers/ProductoController.php';

$controller = new ProductoController();
$action = $_GET['action'] ?? 'listar';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Acción no válida.";
}
