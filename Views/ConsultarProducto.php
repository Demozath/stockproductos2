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
/*     var nombreProducto = document.getElementById("NombreProducto").value;
    if (nombreProducto=="") {
        mensaje=mensaje+"* Nombre del producto NO ingresados \n";
    }
    var sucursal = document.getElementById("sucursal").value;
    if (sucursal=="") {
        mensaje=mensaje+"* Sucursal NO ingresada \n";
    }
    if (mensaje!="") {
        mensaje="Datos faltantes en el formulario \n\n"+mensaje;
        alert(mensaje);
        return false;
    } */
}
</script>

<html>
<head>
    <link href="../Estilos/estilo.css" rel="stylesheet" type="text/css">
    <title>Consultar Productos</title>
</head>
<body>
    <h1>Consultar Producto</h1><br>
    
    <form id="formulario" action="../Controller/ControllerConsultarProducto.php" method="POST" onsubmit="return validar()">
        Codigo Producto
        <input type="text"  id="codigoProducto" name="codigoProducto" onkeypress="return soloNumeros(event)">
        Nombre Producto
<!--         <input type="text"	id="NombreProducto" name="NombreProducto">
        <label for="sucursal">Sucursal</label>
            <select id="sucursal" name="sucursal">
            <option disabled selected value>-- Selecciona Sucursal -- </option>
            <option value="Santiago">Santiago</option>
            <option value="Concepción">Concepción</option>
            <option value="La Serena">La Serena</option>
        </select>
        </br></br> -->
        
        <button type="submit">Buscar Producto</button>
        <input type="button" value="Home" id="botonVolver" OnClick="location.href='../Views/home.php'">
    </form>
</body>
</html>