<?php
include("ModelAsignarProducto.php");

$codigoProducto = $_POST['codigoProducto'];
$nombreProducto = $_POST['NombreProducto'];
$categoriaProducto = $_POST['categoria'];
$sucursal = $_POST['sucursal'];
$descripcion = $_POST['descripcion'];
$cantidadProducto = $_POST['cantidad'];
$PrecioPproducto = $_POST['precio'];

echo "el producto es $.nombreProducto";
$objMAP = new ModeloAsignarProducto();
$msj = ModelAsignarProducto->insertarproducto($codigoProducto, $nombreProducto, $categoriaProducto, $sucursal, $descripcion, $cantidadProducto, $PrecioPproducto);
echo $msj;






?>
