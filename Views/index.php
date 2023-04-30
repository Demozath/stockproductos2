<script>
    function validar(){
        mensaje="";
        var nom = document.getElementById("usuario").value;
        if (nom=="") {
            mensaje=mensaje+"* Usuario no ingresado \n";
        }
        var pass = document.getElementById("contrasena").value;
        if (pass=="") {
            mensaje=mensaje+"* Contraseña no ingresada \n";
        }
        if (mensaje!="") {
            mensaje="Datos faltantes en el formulario \n\n"+mensaje;
            alert(mensaje);
            return false;
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Estilos/estiloHome.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="../Controller/ControllerRegistroUsuario.php" onsubmit="return validar()" method="POST">
        Usuario (ID)
        <input type="text" id="usuario" name="usuario"></input>
        Contraseña:
        <input type="password" id="contrasena" name="contrasena"></input>
        <button type="submit">Ingresar</button>   
    </form>
</body>
</html>