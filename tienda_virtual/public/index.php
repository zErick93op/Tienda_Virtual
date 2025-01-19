<?php
// Se incluye el controlador que gestionará las peticiones relacionadas con productos
require_once '../app/controllers/ProductoController.php';  // Carga el controlador que contiene la lógica de productos

// Se crea una instancia del controlador de productos
$controller = new ProductoController();

// Se obtiene la acción que se desea realizar desde la URL, o 'listar' por defecto
$action = $_GET['action'] ?? 'listar';  // Si no se especifica 'action' en la URL, por defecto se usará 'listar'

// Verifica si el método solicitado existe dentro del controlador
if (method_exists($controller, $action)) {
    // Si el método existe, lo ejecuta
    $controller->$action();
} else {
    // Si el método no existe en el controlador, muestra un mensaje de error
    echo "Acción no válida.";  // Muestra un mensaje de error si la acción no es válida
}
?>
