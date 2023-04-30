<?php
include('conexion.php');
class ModeloAsignarProducto{
	public function insertarproducto($codigoProducto,$nombreProducto,$categoriaProducto,$sucursal,$descripcion,$cantidadProducto,$precioProducto){
		$query = "INSERT INTO producto (CODIGO_PRODUCTO,NOMBRE_PRODUCTO,CATEGORIA_PRODUCTO,SUCURSAL_PRODUCTO,DESCRIPCION_PRODUCTO,CANTIDAD_PRODUCTO,PRECIO_PRODUCTO) VALUES($codigoProducto,'$nombreProducto','$categoriaProducto','$sucursal','$descripcion',$cantidadProducto,$precioProducto)";
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