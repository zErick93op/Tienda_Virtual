# Tienda Virtual - CRUD con PHP (MVC)

Este proyecto es una aplicación básica de gestión de productos para una tienda virtual. Implementa operaciones CRUD (Crear, Leer, Actualizar y Eliminar) utilizando PHP con el patrón de diseño MVC y conexión a MySQL.

## Estructura del Proyecto

```
/tienda_virtual
|-- app
|   |-- controllers
|   |   |-- ProductoController.php
|   |-- models
|   |   |-- Producto.php
|-- public
|   |-- index.php
|-- views
|   |-- listar.php
|   |-- crear.php
|   |-- editar.php
|   |-- eliminar.php
```

### Descripción de Carpetas:
- **app/controllers**: Controladores que gestionan la lógica del negocio.
- **app/models**: Modelos que interactúan con la base de datos.
- **views**: Vistas que renderizan la interfaz para el usuario.
- **public**: Punto de entrada de la aplicación.
- 
## Requisitos
- PHP >= 7.4
- Servidor web local (como XAMPP, WAMP o MAMP)
- MySQL

## Instalación

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/zErick93op/Tienda_Virtual
   ```

2. **Configurar la base de datos:**
   -  Usa tu gestor tu gestor de base de datos (phpMyAdmin, MySQL Workbench, etc.).
   - Asegúrate de que la base de datos se llame `tienda_virtual`.
CREATE DATABASE tienda_virtual;
USE tienda_virtual;
CREATE TABLE productos (
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(8,2),
    stock INT
);

3. **Mover archivos al servidor local:**
   - Copia el contenido del proyecto en la carpeta raíz de tu servidor web (por ejemplo, `htdocs` en XAMPP).

4. **Acceder a la aplicación:**
   - Abre tu navegador y visita:
     ```
     http://localhost/tienda_virtual/public/index.php
     ```

## Uso

### Funcionalidades:
1. **Listar productos:**
   - Muestra una tabla con todos los productos almacenados.
2. **Crear producto:**
   - Crea un nuevo producto completando el formulario correspondiente.
3. **Editar producto:**
   - Modifica los detalles de un producto existente.
4. **Eliminar producto:**
   - Elimina un producto seleccionado.

## Contribuciones

¡Las contribuciones son bienvenidas! Si deseas mejorar el proyecto, abre un issue o envía un pull request.

1. Haz un fork del repositorio.
2. Crea una rama para tu funcionalidad:
   ```bash
   git checkout -b mi-nueva-funcionalidad
   ```
3. Haz tus cambios y confirma los commits:
   ```bash
   git commit -m 'Agrego mi nueva funcionalidad'
   ```
4. Envía tus cambios:
   ```bash
   git push origin mi-nueva-funcionalidad
   ```
5. Crea un Pull Request.

## Licencia
Este proyecto está bajo la licencia MIT. Consulta el archivo `LICENSE` para más detalles.
