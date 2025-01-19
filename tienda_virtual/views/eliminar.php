<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Producto</title>
</head>
<body>
    <h1>Eliminar Producto</h1>
    <p>¿Estás seguro de que deseas eliminar el producto: <?= $producto['nombre'] ?>?</p>
    <form method="post" action="">
        <input type="hidden" name="id_producto" value="<?= $producto['id_producto'] ?>">
        <button type="submit" name="confirmar" value="1">Sí, eliminar</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>