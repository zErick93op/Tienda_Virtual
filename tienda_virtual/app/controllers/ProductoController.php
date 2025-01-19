<?php
// Archivo principal que incluye el modelo Producto para gestionar la base de datos
require_once '../app/models/Producto.php';  // Se incluye el modelo que contiene las funciones CRUD para los productos

class ProductoController {
    // Método para listar todos los productos
    public function listar() {
        $producto = new Producto();  // Se crea una instancia del modelo Producto
        $productos = $producto->obtenerProductos();  // Se obtienen todos los productos de la base de datos
        include '../views/listar.php';  // Se incluye la vista 'listar.php' para mostrar los productos
    }

    // Método para crear un nuevo producto
    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  // Si la solicitud es POST (cuando el formulario ha sido enviado)
            $producto = new Producto();  // Se crea una instancia del modelo Producto
            $producto->crearProducto($_POST);  // Se crea un producto con los datos enviados desde el formulario
            header('Location: index.php');  // Redirige a la página principal (index) después de crear el producto
        } else {
            include '../views/crear.php';  // Si no es POST, se muestra el formulario para crear un producto
        }
    }

    // Método para editar un producto existente
    public function editar() {
        $productoModel = new Producto();  // Se crea una instancia del modelo Producto
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  // Si la solicitud es POST (cuando el formulario de edición es enviado)
            // Validar si los datos necesarios están presentes
            if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio'])) {
                $productoModel->actualizarProducto($_POST);  // Se actualiza el producto con los datos enviados
                header('Location: index.php');  // Redirige a la página principal después de la actualización
                exit;  // Termina la ejecución del script después de la redirección
            } else {
                echo "Error: Datos incompletos.";  // Muestra un mensaje de error si los datos no son completos
            }
        } else {
            // Si la solicitud no es POST, se busca el producto por ID
            if (isset($_GET['id'])) {  // Verifica si el ID del producto está presente en la URL
                $producto = $productoModel->obtenerProductoPorId($_GET['id']);  // Obtiene el producto por ID
                if ($producto) {
                    include '../views/editar.php';  // Si el producto se encuentra, se incluye la vista para editar
                } else {
                    echo "Error: Producto no encontrado.";  // Si el producto no se encuentra, muestra un error
                }
            } else {
                echo "Error: ID no especificado.";  // Si no se especifica un ID en la URL, muestra un error
            }
        }
    }

    // Método para eliminar un producto
    public function eliminar() {
        $productoModel = new Producto();  // Se crea una instancia del modelo Producto
        if (isset($_GET['id'])) {  // Verifica si el ID del producto está presente en la URL
            $producto = $productoModel->obtenerProductoPorId($_GET['id']);  // Obtiene el producto por ID
            if ($producto) {
                $productoModel->eliminarProducto($_GET['id']);  // Si el producto existe, lo elimina de la base de datos
                header('Location: index.php');  // Redirige a la página principal después de eliminar el producto
                exit;  // Termina la ejecución del script después de la redirección
            } else {
                echo "Error: Producto no encontrado.";  // Si el producto no se encuentra, muestra un error
            }
        } else {
            echo "Error: ID no especificado.";  // Si no se especifica un ID en la URL, muestra un error
        }
    }
}
?>
