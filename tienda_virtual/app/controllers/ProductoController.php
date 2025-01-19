<?php
require_once '../app/models/Producto.php';

class ProductoController {
    public function listar() {
        $producto = new Producto();
        $productos = $producto->obtenerProductos();
        include '../views/listar.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $producto = new Producto();
            $producto->crearProducto($_POST);
            header('Location: index.php');
        } else {
            include '../views/crear.php';
        }
    }

    public function editar() {
        $productoModel = new Producto();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validar si los datos necesarios están presentes
            if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio'])) {
                $productoModel->actualizarProducto($_POST);
                header('Location: index.php');
                exit;
            } else {
                echo "Error: Datos incompletos.";
            }
        } else {
            // Validar si el parámetro id está presente en la URL
            if (isset($_GET['id'])) {
                $producto = $productoModel->obtenerProductoPorId($_GET['id']);
                if ($producto) {
                    include '../views/editar.php';
                } else {
                    echo "Error: Producto no encontrado.";
                }
            } else {
                echo "Error: ID no especificado.";
            }
        }
    }

    public function eliminar() {
        $productoModel = new Producto();
        if (isset($_GET['id'])) {
            $producto = $productoModel->obtenerProductoPorId($_GET['id']);
            if ($producto) {
                $productoModel->eliminarProducto($_GET['id']);
                header('Location: index.php');
                exit;
            } else {
                echo "Error: Producto no encontrado.";
            }
        } else {
            echo "Error: ID no especificado.";
        }
    }
}
