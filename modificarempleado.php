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

    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
</head>

<body>
    <form action="actualizarempleado.php" method="POST" name="nuevoempleado">
        <input type="text" name="nombre_empleado" value="<?php echo $registro['nombre'] ?>"> </br>
        <input type="number" name="empleado_edad" value="<?php echo $registro['edad'] ?>"> </br>
        <input type="hidden" name="empleado_id" value="<?php echo $registro['id'] ?>">
        <input type="submit" value="Actualizar Empleado">
    </form>
</body>

</html>