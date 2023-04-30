<?php
include('../Model/ModeloAsignarProducto.php');
//$idProducto = $_POST['productoID'];
$codigoProducto = $_POST['codigoProducto'];
$nombreProducto = $_POST['NombreProducto'];
$categoriaProducto = $_POST['categoria'];
$sucursal = $_POST['sucursal'];
$descripcion = $_POST['descripcion'];
$cantidadProducto = $_POST['cantidad'];
$precioProducto = $_POST['precio'];

$objMAP = new ModeloAsignarProducto();
$msj = $objMAP->insertarproducto($codigoProducto,$nombreProducto,$categoriaProducto,$sucursal,$descripcion,$cantidadProducto,$precioProducto);

echo "<center><h1>".$msj."</h1></center>";

?>
<link href="../Estilos/estiloController.css" rel="stylesheet" type="text/css">
<input type="button" value="Ir al Home" id="botonHome" OnClick="location.href='../Views/home.php' ">





<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Mi tabla</title>
    <link href="../Estilos/estiloController.css" rel="stylesheet" type="text/css">
</head>
<body>
	<table>
		<tr>
			<th>ID Producto</th>
			<td><?php echo $idProducto ?></td>
		</tr>
        <tr>
			<th>Codigo Producto</th>
			<td><?php echo $codigoProducto ?></td>
		</tr>
		<tr>
			<th>Nombre Producto</th>
			<td><?php echo $nombreProducto ?></td>
		</tr>
		<tr>
			<th>Categoria</th>
			<td><?php echo $categoriaProducto ?></td>
		</tr>
		<tr>
			<th>Sucursal</th>
			<td><?php echo $sucursal?></td>
		</tr>
		<tr>
			<th>Descripción</th>
			<td><?php echo $descripcion?></td>
		</tr>
		<tr>
			<th>Cantidad</th>
			<td><?php echo $cantidadProducto?></td>
		</tr>
        <tr>
			<th>Precio</th>
			<td><?php echo $PrecioPproducto?></td>
		</tr>

    </table>

    <input type="button" value="Edita tu producto" onclick="history.back()">
	<input type="button" value="Volver a home" id="botonVolver" OnClick="location.href='../Views/home.php'">

 

</body>
</html> -->