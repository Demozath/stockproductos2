<?php

include 'conexion.php';

class ModeloEliminarProducto
{
    public function ConsultarProducto($codigoProducto)
    {
        $query = "SELECT * FROM producto WHERE (CODIGO_PRODUCTO) = ($codigoProducto)";
        $link = conexion::conecta();
        $resultado = mysqli_query($link, $query);
        mysqli_close($link);
        return $resultado;
    }
    public function EliminarProducto($codigoProducto)
    {
        $query = "DELETE FROM PRODUCTO WHERE CODIGO_PRODUCTO = $codigoProducto";
        $stringConnection = Conexion::conecta();

        if (mysqli_query($stringConnection, $query)) {
            $nfilas = mysqli_affected_rows($stringConnection);
            if ($nfilas > 0) {
                $msj = "Se ha eliminado el producto con éxito";
            } else {
                $msj = "No se ha podido eliminar el producto solicitado";
            }
        } else {
            $msj = "Error al ejecutar la query";
        }
        return $msj;
    }
}