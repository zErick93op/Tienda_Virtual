<?php
class Producto {
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli('localhost', 'root', '', 'tienda_virtual');
        if ($this->conexion->connect_error) {
            die('Error de conexión: ' . $this->conexion->connect_error);
        }
    }

    public function obtenerProductos() {
        $result = $this->conexion->query('SELECT * FROM productos');
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerProductoPorId($id) {
        $id = (int) $id;
        $result = $this->conexion->query("SELECT * FROM productos WHERE id_producto = $id");
        return $result->fetch_assoc();
    }

    public function crearProducto($datos) {
        $nombre = $this->conexion->real_escape_string($datos['nombre']);
        $descripcion = $this->conexion->real_escape_string($datos['descripcion']);
        $precio = (float) $datos['precio'];
        $stock = (int) $datos['stock'];
        $this->conexion->query("INSERT INTO productos (nombre, descripcion, precio, stock) VALUES ('$nombre', '$descripcion', $precio, $stock)");
    }

    public function actualizarProducto($datos) {
        $id = (int) $datos['id_producto'];
        $nombre = $this->conexion->real_escape_string($datos['nombre']);
        $descripcion = $this->conexion->real_escape_string($datos['descripcion']);
        $precio = (float) $datos['precio'];
        $stock = (int) $datos['stock'];
        $this->conexion->query("UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio, stock = $stock WHERE id_producto = $id");
    }

    public function eliminarProducto($id) {
        $id = (int) $id;
        $this->conexion->query("DELETE FROM productos WHERE id_producto = $id");
    }
}
