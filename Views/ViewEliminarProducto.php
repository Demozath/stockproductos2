<script>
function validarFormulario() {
    var codigoProducto = document.getElementById('codigoProducto').value;
    if (codigoProducto === '' ) {
        alert('Por favor, complete todos los campos');
        event.preventDefault();
    }
}

function soloNumeros(e) {
var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Estilos/estilo.css" rel="stylesheet" type="text/css">
    <title>Eliminar Producto</title>
</head>
<body>
    <h1>Eliminar Producto</h1>
    <form id="formulario" action="../Controller/ControllerEliminarProducto.php" method="POST" onsubmit="validarFormulario()">
    Código Producto que desea eliminar:    
    <input type="text" id="codigoProducto" name="codigoProducto" onkeypress="return soloNumeros(event)">
    <button type="submit">Eliminar Producto</button>
    <input type="button" value="Home" id="botonVolver" OnClick="location.href='../Views/home.php'">
</body>
</html>