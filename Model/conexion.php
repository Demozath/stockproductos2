<?php

class Conexion {

    public static function conecta(){
        $server = "127.0.0.1";
        $user = "root";
        $pass = "";
        $database = "stockproductos";

        try{
            $stringConnection = mysqli_connect($server, $user, $pass, $database);
            return $stringConnection;
        }
        catch(mysqli_sql_exception $error){
            print $error->getMessage();
            exit();
        }
    }
}


?>