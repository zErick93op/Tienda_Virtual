<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>  <!-- Título de la página que aparece en la pestaña del navegador -->
</head>
<body>
    <h1>Productos</h1>  <!-- Título principal de la página que indica que se están mostrando los productos -->

    <!-- Enlace para crear un nuevo producto -->
    <a href="index.php?action=crear">Crear Producto</a>  
    <!-- Enlace que redirige al formulario para crear un nuevo producto. Este enlace ejecuta la acción 'crear' en el controlador 'ProductoController'. -->

    <!-- Tabla para mostrar los productos -->
    <table border="1">  <!-- La tabla tiene un borde de 1 píxel de grosor -->
        <tr>
            <th>ID</th>  <!-- Encabezado de columna para el ID del producto -->
            <th>Nombre</th>  <!-- Encabezado de columna para el nombre del producto -->
            <th>Descripción</th>  <!-- Encabezado de columna para la descripción del producto -->
            <th>Precio</th>  <!-- Encabezado de columna para el precio del producto -->
            <th>Stock</th>  <!-- Encabezado de columna para la cantidad de stock disponible -->
        </tr>
        
        <!-- Bucle que recorre todos los productos y los muestra en filas de la tabla -->
        <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['id_producto'] ?></td>  <!-- Muestra el ID del producto -->
            <td><?= $producto['nombre'] ?></td>  <!-- Muestra el nombre del producto -->
            <td><?= $producto['descripcion'] ?></td>  <!-- Muestra la descripción del producto -->
            <td><?= $producto['precio'] ?></td>  <!-- Muestra el precio del producto -->
            <td><?= $producto['stock'] ?></td>  <!-- Muestra la cantidad de stock disponible del producto -->
        </tr>
        <?php endforeach; ?>  <!-- Finaliza el bucle -->
    </table>
</body>
</html>
