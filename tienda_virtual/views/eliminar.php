<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Producto</title>  <!-- Título de la página que aparece en la pestaña del navegador -->
</head>
<body>
    <h1>Eliminar Producto</h1>  <!-- Título principal que indica que se está eliminando un producto -->

    <!-- Mensaje de confirmación para eliminar el producto -->
    <p>¿Estás seguro de que deseas eliminar el producto: <?= $producto['nombre'] ?>?</p>  
    <!-- Se muestra el nombre del producto que está a punto de eliminarse. El nombre se obtiene dinámicamente con PHP, usando el array $producto que contiene la información del producto que se está eliminando. -->
    
    <!-- Formulario para confirmar la eliminación -->
    <form method="post" action="">  <!-- Se utiliza el método POST para enviar la solicitud de eliminación al servidor -->
        
        <!-- Campo oculto para enviar el id del producto a eliminar -->
        <input type="hidden" name="id_producto" value="<?= $producto['id_producto'] ?>">  
        <!-- El campo oculto 'id_producto' contiene el ID del producto que se desea eliminar, obtenido dinámicamente desde el array $producto. -->
        
        <!-- Botón para confirmar la eliminación del producto -->
        <button type="submit" name="confirmar" value="1">Sí, eliminar</button>  
        <!-- El botón envía el formulario con el valor '1' en el campo 'confirmar'. Este campo se utilizará para confirmar que el usuario quiere eliminar el producto. -->
        
        <!-- Enlace para cancelar la eliminación y regresar al listado de productos -->
        <a href="index.php">Cancelar</a>  
        <!-- Enlace para cancelar la acción de eliminación y volver a la página principal o al listado de productos. -->
    </form>
</body>
</html>
