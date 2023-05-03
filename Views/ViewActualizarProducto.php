<script>
function soloNumeros(e) {
var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}
function validar(){
    mensaje="";
    var codigoProducto = document.getElementById("codigoProducto").value;
    if (codigoProducto=="") {
        mensaje=mensaje+"* Codigo Producto NO ingresado \n";
    }
}
</script>

<html>
<head>
    <link href="../Estilos/estilo.css" rel="stylesheet" type="text/css">
    <title>Consultar Productos</title>
</head>
<body>
    <h1>Consultar Producto</h1><br>
        <form id="formulario" action="../Controller/ControllerActualizarProducto.php" method="POST" onsubmit="return validar()">
        Codigo Producto
        <input type="text"  id="codigoProducto" name="codigoProducto" onkeypress="return soloNumeros(event)">
        <button type="submit">Buscar Producto</button>
        <input type="button" value="Home" id="botonVolver" OnClick="location.href='../Views/home.php'">
    </form>
</body>
</html>