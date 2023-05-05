<?php

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($usuario == "admin"&&$contrasena == '123'){
    $statusConexionAdmin = "Administrador";
}
else{
    $statusConexionAdmin = "Normal";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Estilos/estiloController.css" rel="stylesheet" type="text/css">
</head>
<body>
<body>
    <h1>Datos de Conexión</h1>
<table border="1">
    <tbody>
        <tr><br>
            <td>Usuario (ID):</td>
            <td><?php echo $usuario; ?></td><br>
        </tr>
            <td>Tipo Cuenta :</td>
            <td><?php echo $statusConexionAdmin ?></td>
        </tr>
    </tbody>
</table>
<input type="button" value="Ir al Home" id="botonHome" OnClick="location.href='../Views/home.php' ">
</body>
</html>