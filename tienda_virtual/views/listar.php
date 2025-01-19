<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <a href="index.php?action=crear">Crear Producto</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['id_producto'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['descripcion'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['stock'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
