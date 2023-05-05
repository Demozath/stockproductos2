<?php

include('conexion.php');

class ModeloActualizarProducto
{
    public function ActualizarProducto($codigoProducto, $nombreProducto, $precioProducto, $descripcionProducto)
    {
        $query = "UPDATE PRODUCTO SET NOMBRE_PRODUCTO = '$nombreProducto', DESCRIPCION_PRODUCTO = '$descripcionProducto', PRECIO_PRODUCTO = $precioProducto WHERE CODIGO_PRODUCTO = '$codigoProducto'";
        $stringConnection = Conexion::conecta();

        if(mysqli_query($stringConnection, $query)){
            $nfilas = mysqli_affected_rows($stringConnection);
            if($nfilas > 0){
                $msj = "Se ha actualizado el producto con éxito";
            }
            else{
                $msj = "No se ha podido actualizar el producto";
            }
        }
        else{
            $msj = "Error al ejecutar la query";
        }
        return $msj;

    }
}

?>