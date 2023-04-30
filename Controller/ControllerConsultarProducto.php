<?php
include('../Model/ModeloConsultarProducto.php');

$codigoProducto = $_POST['codigoProducto'];
//$nombreProducto = $_POST['NombreProducto'];
//$sucursal = $_POST['sucursal'];

//instancia

$objlus = new ModeloConsultarProducto();
$resultado = $objlus->ConsultarProducto($codigoProducto);
//,$nombreProducto,$sucursal
?>

<table border="1">
    <tr><td>Codigo</td> <td>Nombre</td> <td>Categoria</td> <td>Descripcion</td> <td>Sucursal</td> <td>Cantidad</td> <td>Precio</td> </tr>

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