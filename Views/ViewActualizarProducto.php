<script>

function soloNumeros(e) {
var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}

function validarFormulario() {
    var codigoProducto = document.getElementById('codigoProducto').value;
    var nombreProducto = document.getElementById('nombreProducto').value;
    var descripcionProducto = document.getElementById('descripcionProducto').value;
    var precioProducto = document.getElementById('precioProducto').value;
    if (codigoProducto === '' || nombreProducto === '' || descripcionProducto === '' || precioProducto === '') {
        alert('Por favor, complete todos los campos');
        event.preventDefault();
    }

}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../Estilos/estilo.css" rel="stylesheet" type="text/css">
  <title>Actualizar Producto</title>
</head>
<body>
  <h1>Actualiza tu producto</h1>
    <form id="formulario" action="../Controller/ControllerActualizarProducto.php" method="POST" onsubmit="validarFormulario()">
        Codigo Producto:
        <input type="text" id="codigoProducto" name="codigoProducto" label="codigoProducto" onkeypress="return soloNumeros(event)">
        Nombre Producto:
        <input type="text" id="nombreProducto" name="nombreProducto" label="NombreProducto">
        Descripción Producto:
        <input type="text" id="descripcionProducto" name="descripcionProducto" label="descripcionProducto">
        Precio Producto:
        <input type="text" id="precioProducto" name="precioProducto" label="precioProducto" onkeypress="return soloNumeros(event)">
        <button type="submit" value="Actualizar">Actualizar</button>
        <input type="button" value="Home" id="botonVolver" OnClick="location.href='../Views/home.php'">
    </form>
</body>
</html>
