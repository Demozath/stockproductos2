<?php

include('../Model/ModeloEliminarProducto.php');

$codigoProducto = $_POST['codigoProducto'];


$objMEP = new ModeloEliminarProducto();
$msj = $objMEP->EliminarProducto($codigoProducto);

echo $msj;




?>

