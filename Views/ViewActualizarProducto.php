<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../Estilos/estilo.css" rel="stylesheet" type="text/css">
  <title>Document</title>
</head>
<body>

<h1>Esto es una actualización de Producto</h1>

<form id="formulario" action="../Controller/ControllerActualizarProducto.php" method="POST">
  Codigo Producto:</br>
  <input type="text" id="codigoProducto" name="codigoProducto" label="codigoProducto">
  Nombre Producto:</br>
  <input type="text" id="nombreProducto" name="nombreProducto" label="NombreProducto">
  Descripción Producto:</br>
  <input type="text" id="descripcionProducto" name="descripcionProducto" label="descripcionProducto">
  Precio Producto:</br>
  <input type="text" id="precioProducto" name="precioProducto" label="precioProducto">
  <input type="submit" value="Actualizar">
 

  
</body>
</html>