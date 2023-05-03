<?php
include 'Conexion.php';

class ModeloConsultarProducto
{

    public function ConsultarProducto($codigoProducto, $sucursal = null)
    {
        $query = "SELECT * FROM producto WHERE (CODIGO_PRODUCTO) = ($codigoProducto)";
        if ($sucursal !== null) {
            $query .= "AND SUCURSAL_PRODUCTO = '$sucursal'";
        }
        $link = conexion::conecta();
        $resultado = mysqli_query($link, $query);
        mysqli_close($link);
        return $resultado;
    }

    public function ConsultarProductoNombre($nombreProducto, $sucursal = null)
    {
        $queryNombre = "SELECT * FROM PRODUCTO WHERE (NOMBRE_PRODUCTO) like ('%$nombreProducto%')";
        if ($sucursal !== null) {
            $queryNombre .= "AND SUCURSAL_PRODUCTO = '$sucursal'";
        }
        $link = Conexion::conecta();
        $resultadoNombre = mysqli_query($link, $queryNombre);
        mysqli_close($link);
        return $resultadoNombre;
    }

    public function ConsultarSucursal($sucursal)
    {
        $queryNombre = "SELECT * FROM PRODUCTO WHERE (SUCURSAL_PRODUCTO) like ('%$sucursal%')";
        $link = Conexion::conecta();
        $resultadoNombre = mysqli_query($link, $queryNombre);
        mysqli_close($link);
        return $resultadoNombre;
    }

    public function ActualizarProducto($codigoProducto, $nombreProducto, $descripcionProducto, $precioProducto)
    {
        // Verificar si el registro existe antes de actualizar
        $query = "SELECT * FROM PRODUCTO WHERE CODIGO_PRODUCTO = '$codigoProducto'";
        $link = Conexion::conecta();
        $resultado = mysqli_query($link, $query);

        if (mysqli_num_rows($resultado) > 0) {
            $queryUpdate = "UPDATE PRODUCTO SET
                NOMBRE_PRODUCTO='$nombreProducto',
                DESCRIPCION_PRODUCTO='$descripcionProducto',
                PRECIO_PRODUCTO=$precioProducto
                WHERE CODIGO_PRODUCTO='$codigoProducto'";
            $resultadoUpdate = mysqli_query($link, $queryUpdate);
            mysqli_close($link);
            return $resultadoUpdate;
        } else {
            // Si el registro no existe, retornar false
            mysqli_close($link);
            return false;
        }
    }
}
