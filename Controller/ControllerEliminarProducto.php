<?php

include('../Model/ModeloEliminarProducto.php');

$codigoProducto = $_POST['codigoProducto'];


$objMEP = new ModeloEliminarProducto();
$msj = $objMEP->EliminarProducto($codigoProducto);

echo "<center><h1>".$msj."</h1></center>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Estilos/estiloController.css" rel="stylesheet" type="text/css">
    <title>Eliminando Producto</title>
</head>
<body>
<input type="button" value="Home" id="botonVolver" OnClick="location.href='../Views/home.php'">
</body>
</html>
