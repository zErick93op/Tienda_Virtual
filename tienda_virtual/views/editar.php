<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="post" action="">
        <input type="hidden" name="id_producto" value="<?= $producto['id_producto'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion" required><?= $producto['descripcion'] ?></textarea><br>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required><br>
        <label>Stock:</label>
        <input type="number" name="stock" value="<?= $producto['stock'] ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
