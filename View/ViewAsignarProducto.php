<script>

function soloNumeros(e) {
var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}

function validar(){
    var codigoProducto = document.getElementById("codigoProducto").value;
    if (codigoProducto=="") {
        mensaje=mensaje+"* Codigo Producto NO ingresado \n";
    }
    var nombreProducto = document.getElementById("NombreProducto").value;
    if (nombreProducto=="") {
        mensaje=mensaje+"* Nombre del producto NO ingresados \n";
    }
    var categoria = document.getElementById("categoria").value;
    if (categoria=="") {
        mensaje=mensaje+"* Categoria NO ingresada \n";
    }
    var sucursal = document.getElementById("sucursal").value;
    if (sucursal=="") {
        mensaje=mensaje+"* Sucursal NO ingresada \n";
    }
    var descripcion = document.getElementById("descripcion").value;
    if (descripcion=="") {
        mensaje=mensaje+"* Descripción NO ingresada \n";
    }
    var cantidad = document.getElementById("cantidad").value;
    if (cantidad=="") {
        mensaje=mensaje+"* Cantidad NO ingresada \n";
    }
    var precio = document.getElementById("precio").value;
    if (precio=="") {
        mensaje=mensaje+"* Precio NO ingresado \n";
    }

    if (mensaje!="") {
        mensaje="Datos faltantes en el formulario \n\n"+mensaje;
        alert(mensaje);
        return false;
    }
}
</script>

<html>
<head>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <title>Registro de Productos</title>
</head>
<body>
    <h1>Registro de Producto</h1><br>
    
    <form id="formulario" action="../Controller/ControllerAsignarProducto.php" method="POST" onsubmit="return validar()">
        Codigo Producto
        <input type="text"  id="codigoProducto" name="codigoProducto" onkeypress="return soloNumeros(event)">
        Nombre Producto
        <input type="text"	id="NombreProducto" name="NombreProducto">
        Categoría
        <input type="text"	id="categoria" name="categoria">
        <label for="sucursal">Sucursal</label>
            <select id="sucursal" name="sucursal">
            <option disabled selected value>-- Selecciona Sucursal -- </option>
            <option value="Santiago">Santiago</option>
            <option value="Concepción">Concepción</option>
            <option value="La Serena">La Serena</option>
        </select>
        </br></br>
        Descripción
        <input type="text"	id="descripcion" name="descripcion">
        Cantidad
        <input type="text"  id="cantidad" name="cantidad" onkeypress="return soloNumeros(event)">
        Precio
        <input type="text"  id="precio" name="precio" onkeypress="return soloNumeros(event)">
        <button type="submit">Registrar Producto</button>
    </form>
</body>
</html>