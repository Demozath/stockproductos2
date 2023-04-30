<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Stock Productos</title>
    <link href="../Estilos/estiloHome.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Favor seleccione la opción que desea realizar:</h1>
    <div id="accionesProductos">
        <input type="button" value="Asignar Producto a sucursal" id="botonAsignar" name="B4" OnClick="location.href='ViewAsignarProducto.php' ">
        <input type="button" value="Consultar Producto por código, nombre y sucursal" id="botonConsulta" name="B4" OnClick="pendiente">
        <input type="button" value="Dar de baja Producto" id="botonEliminar" name="B4" OnClick="location.href='eliminarProducto.php' ">
        <input type="button" value="Actualizar Producto" id="botonEditar" name="B4" OnClick="location.href='editarProducto.php' ">
    </div>



</body> 




</html>