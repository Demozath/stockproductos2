<?php 

include('Conexion.php');
class ModeloConsultarProducto{

    public function ConsultarProducto($codigoProducto, $sucursal = null){
        $query = "SELECT * FROM producto WHERE (CODIGO_PRODUCTO) = ($codigoProducto)";
        if($sucursal !==null){
            $query = "AND SUCURSAL_PRODUCTO = '$sucursal'";
        }
        $link = Conexion::conecta();
        $resultado = mysqli_query($link, $query);
        mysqli_close($link);
        return $resultado;
    }
    
        public function ConsultarProductoNombre($nombreProducto, $sucursal =null){
        $queryNombre = "SELECT * FROM PRODUCTO WHERE (NOMBRE_PRODUCTO) = ('$nombreProducto')";
        if($sucursal !==null){
            $queryNombre = "AND SUCURSAL_PRODUCTO = '$sucursal'";
        }
        $link = Conexion::conecta();
        $resultadoNombre = mysqli_query($link, $queryNombre);
        mysqli_close($link);
        return $resultadoNombre;
        }

    }
//,$nombreProducto,$sucursal
//,NOMBRE_PRODUCTO,SUCURSAL_PRODUCTO
//,'$nombreProducto','$sucursal'



?>