<?php

include('../Model/ModeloEliminarProducto.php');

$codigoProducto = $_POST['codigoProducto'];

$objlus = new ModeloEliminarProducto();
$resultado =$objlus->ConsultarProducto($codigoProducto);

$objMEP = new ModeloEliminarProducto();
$msj = $objMEP->EliminarProducto($codigoProducto);

echo "<center><h1>".$msj."</h1></center>";
?>

<html>
<head>
<link href="../Estilos/estiloController.css" rel="stylesheet" type="text/css">
    <title>Eliminando Producto</title>
</head>
<body>
    <center><h1>Productos - Búsqueda</h1></center><br>
    <table>
        <tr>
            <th>Codigo</th> 
            <th>Nombre</th> 
            <th>Categoria</th> 
            <th>Descripcion</th> 
            <th>Sucursal</th> 
            <th>Cantidad</th> 
            <th>Precio</th> 
        </tr>
<?php
foreach ($resultado as $fila) { 
    $codigoProducto = $fila['CODIGO_PRODUCTO'];
    $nombreProducto = $fila['NOMBRE_PRODUCTO'];
    $categoriaProducto = $fila['CATEGORIA_PRODUCTO'];
    $descripcion = $fila['DESCRIPCION_PRODUCTO'];
    $sucursal = $fila['SUCURSAL_PRODUCTO'];
    $cantidadProducto = $fila['CANTIDAD_PRODUCTO'];
    $precioProducto = $fila['PRECIO_PRODUCTO'];

    echo '<tr><td>'.$codigoProducto.'</td> <td>'.$nombreProducto.'</td> <td>'.$categoriaProducto.'</td> <td>'.$descripcion.'</td> <td>'.$sucursal.'</td> <td>'.$cantidadProducto.'</td> <td>'.$precioProducto.'</td></tr>';
}
?>
</table>
<input type="button" value="Ir al Home" id="botonHome" OnClick="location.href='../Views/home.php' ">
