<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>  <!-- Título de la página, que aparecerá en la pestaña del navegador -->
</head>
<body>
    <h1>Crear Producto</h1>  <!-- Título principal de la página que indica al usuario que está creando un producto -->

    <!-- Formulario para ingresar los datos del nuevo producto -->
    <form method="post" action="">  <!-- Se establece el método POST para enviar los datos al servidor. El action vacío significa que el formulario se enviará a la misma URL -->
        
        <!-- Campo para el nombre del producto -->
        <label>Nombre:</label>  <!-- Etiqueta que describe el campo -->
        <input type="text" name="nombre" required>  <!-- Campo de texto para ingresar el nombre del producto. 'required' asegura que este campo no esté vacío al enviarlo -->
        <br>  <!-- Salto de línea para separar los campos -->
        
        <!-- Campo para la descripción del producto -->
        <label>Descripción:</label>  <!-- Etiqueta que describe el campo -->
        <textarea name="descripcion" required></textarea>  <!-- Campo de texto más grande para la descripción del producto. También 'required' para asegurarse de que se ingrese información -->
        <br>  <!-- Salto de línea -->
        
        <!-- Campo para el precio del producto -->
        <label>Precio:</label>  <!-- Etiqueta para el campo de precio -->
        <input type="number" step="0.01" name="precio" required>  <!-- Campo numérico para ingresar el precio. 'step' permite ingresar decimales con precisión de hasta 2 decimales -->
        <br>  <!-- Salto de línea -->
        
        <!-- Campo para el stock disponible del producto -->
        <label>Stock:</label>  <!-- Etiqueta para el campo de stock -->
        <input type="number" name="stock" required>  <!-- Campo numérico para ingresar el stock disponible -->
        <br>  <!-- Salto de línea -->

        <!-- Botón para enviar el formulario -->
        <button type="submit">Guardar</button>  <!-- El botón para enviar los datos del formulario al servidor -->
    </form>
</body>
</html>
