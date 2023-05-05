<?php
include('../Model/ModeloAsignarProducto.php');
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
