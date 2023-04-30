<?php
include('conexion.php');
class ModeloAsignarProducto{
	public function insertarproducto($codigo,$nombre,$categoria,$sucursal,$descripcion,$cantidad,$precio){
		$query = "INSERT INTO stockproductos (CODIGO_PRODUCTO,NOMBRE_PRODUCTO,CATEGORIA_PRODUCTO,SUCURSAL_PRODUCTO,DESCRIPCION_PRODUCTO,CANTIDAD_PRODUCTO,PRECIO_PRODUCTO) VALUES($codigo,'$nombre','$categoria','$sucursal','$descripcion',$cantidad,$precio)";
		$stringConnection = Conexion::conecta();

		if(mysqli_query($stringConnection, $query)){
            $nfilas = mysqli_affected_rows($stringConnection);
            if($nfilas > 0){
                $msj = "Registro insertado con exito";
            }
            else{
                $msj = "Error al insertar";
            }
        }
        else{
            $msj = "Error al ejecutar la query";
        }

        return $query;
	}
    }
    ?>