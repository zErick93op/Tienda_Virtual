<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>  <!-- Título de la página, que aparece en la pestaña del navegador -->
</head>
<body>
    <h1>Editar Producto</h1>  <!-- Título principal de la página que indica que se está editando un producto -->

    <!-- Formulario para editar los datos de un producto -->
    <form method="post" action="">  <!-- Se utiliza el método POST para enviar los datos al servidor -->
        
        <!-- Campo oculto para enviar el id del producto que se está editando -->
        <input type="hidden" name="id_producto" value="<?= $producto['id_producto'] ?>">  
        <!-- 'id_producto' es un campo oculto que se incluye para identificar qué producto se está editando. El valor se obtiene dinámicamente con PHP, mostrando el ID del producto desde la base de datos. -->
        
        <!-- Campo para editar el nombre del producto -->
        <label>Nombre:</label>  <!-- Etiqueta que describe el campo -->
        <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required>  
        <!-- Campo de texto para el nombre del producto. El valor inicial se llena con el nombre del producto actual (usando PHP) y es obligatorio debido al atributo 'required'. -->
        <br>  <!-- Salto de línea -->
        
        <!-- Campo para editar la descripción del producto -->
        <label>Descripción:</label>  <!-- Etiqueta para la descripción -->
        <textarea name="descripcion" required><?= $producto['descripcion'] ?></textarea>  
        <!-- Un área de texto para editar la descripción del producto. Se llena con el valor actual de la descripción, usando PHP, y es obligatorio. -->
        <br>  <!-- Salto de línea -->
        
        <!-- Campo para editar el precio del producto -->
        <label>Precio:</label>  <!-- Etiqueta para el precio -->
        <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required>  
        <!-- Campo numérico para el precio del producto, con una precisión de dos decimales (atributo 'step="0.01"'). El valor inicial se llena con el precio actual del producto. -->
        <br>  <!-- Salto de línea -->
        
        <!-- Campo para editar el stock disponible del producto -->
        <label>Stock:</label>  <!-- Etiqueta para el stock -->
        <input type="number" name="stock" value="<?= $producto['stock'] ?>" required>  
        <!-- Campo numérico para editar el stock disponible del producto. El valor se llena con el stock actual del producto. -->
        <br>  <!-- Salto de línea -->

        <!-- Botón para enviar el formulario y actualizar el producto -->
        <button type="submit">Actualizar</button>  <!-- Botón para enviar el formulario -->
    </form>
</body>
</html>

