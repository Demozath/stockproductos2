<?php 

include('Conexion.php');
class ModeloConsultarProducto{

    public function ConsultarProducto($codigoProducto){
        $query = "SELECT * FROM producto WHERE (CODIGO_PRODUCTO) = ($codigoProducto)";
        $link = Conexion::conecta();
        $resultado = mysqli_query($link, $query);
        mysqli_close($link);
        return $resultado;
    }
    
//,$nombreProducto,$sucursal
//,NOMBRE_PRODUCTO,SUCURSAL_PRODUCTO
//,'$nombreProducto','$sucursal'

}


?>