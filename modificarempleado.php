<?php
include "basededatos.php";

$sql = "SELECT id,nombre,edad FROM empleado WHERE id=" . $_GET['empleadoid'] . " LIMIT 1";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);

$registro = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modificar Empleado</title>

    <link rel="stylesheet" type="text/css" href="estilos/layout.css">
    <link rel="stylesheet" type="text/css" href="estilos/altaempleado.css" >
</head>

<body>
    <div class="altaempleado_box">
        <h1>Actualizar Empleado</h1>
        <form action="actualizarempleado.php" class="formulario" id="formulario" method="POST" name="nuevoempleado">

            <!--Grupo Nombre-->
            <div class="formulario_grupo">
                <input type="text" class="formulario_input" id="nombre_empleado" name="nombre_empleado" value="<?php echo $registro['nombre'] ?>">
                <p class="formulario_input_error">El nombre solo puede llevar letras y espacios.</p>    
            </div>
            <!--Grupo Edad-->
            <div class="formulario_grupo">
                <input type="text" class="formulario_input" id="empleado_edad" name="empleado_edad" value="<?php echo $registro['edad'] ?>"> 
                <p class="formulario_input_error2">Edad debe ser de 18-65 años.</p>
            </div>

            <!--Grupo Empleado_id-->
            <input type="hidden" name="empleado_id" value="<?php echo $registro['id'] ?>">

            <!--Grupo submit Actualizar Empleado-->
            <input type="submit" name="alta_empleado"">
        </form>
    </div>
    <script src="js/validacion.js"></script> 
</body>
    
</html>