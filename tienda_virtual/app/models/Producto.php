<?php
class Producto {
    private $conexion;

    // El constructor establece la conexión a la base de datos
    public function __construct() {
        $this->conexion = new mysqli('localhost', 'root', '', 'tienda_virtual');  // Se conecta a la base de datos 'tienda_virtual' en localhost con usuario 'root'
        if ($this->conexion->connect_error) {
            die('Error de conexión: ' . $this->conexion->connect_error);  // Si hay un error de conexión, se termina la ejecución y muestra el error
        }
    }

    // Método para obtener todos los productos de la base de datos
    public function obtenerProductos() {
        $result = $this->conexion->query('SELECT * FROM productos');  // Realiza una consulta para obtener todos los productos
        return $result->fetch_all(MYSQLI_ASSOC);  // Devuelve los productos en un arreglo asociativo
    }

    // Método para obtener un producto específico por su ID
    public function obtenerProductoPorId($id) {
        $id = (int) $id;  // Asegura que el ID sea un entero
        $result = $this->conexion->query("SELECT * FROM productos WHERE id_producto = $id");  // Consulta para obtener el producto por su ID
        return $result->fetch_assoc();  // Devuelve el producto en formato asociativo
    }

    // Método para crear un nuevo producto
    public function crearProducto($datos) {
        $nombre = $this->conexion->real_escape_string($datos['nombre']);  // Escapa caracteres especiales para evitar inyecciones SQL
        $descripcion = $this->conexion->real_escape_string($datos['descripcion']);  // Escapa la descripción del producto
        $precio = (float) $datos['precio'];  // Convierte el precio a tipo float
        $stock = (int) $datos['stock'];  // Convierte el stock a tipo entero
        // Inserta el nuevo producto en la base de datos
        $this->conexion->query("INSERT INTO productos (nombre, descripcion, precio, stock) VALUES ('$nombre', '$descripcion', $precio, $stock)");
    }

    // Método para actualizar un producto existente
    public function actualizarProducto($datos) {
        $id = (int) $datos['id_producto'];  // Asegura que el ID sea un entero
        $nombre = $this->conexion->real_escape_string($datos['nombre']);  // Escapa el nombre del producto
        $descripcion = $this->conexion->real_escape_string($datos['descripcion']);  // Escapa la descripción
        $precio = (float) $datos['precio'];  // Convierte el precio a tipo float
        $stock = (int) $datos['stock'];  // Convierte el stock a tipo entero
        // Actualiza los datos del producto en la base de datos
        $this->conexion->query("UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio, stock = $stock WHERE id_producto = $id");
    }

    // Método para eliminar un producto por su ID
    public function eliminarProducto($id) {
        $id = (int) $id;  // Asegura que el ID sea un entero
        // Elimina el producto de la base de datos
        $this->conexion->query("DELETE FROM productos WHERE id_producto = $id");
    }
}
?>
