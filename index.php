<!--Project Name: Alta Empleado
Purpose Summary: Es una aplicación que permite dar de alta a un nuevo empleado
y agregarlo a la base de datos empresa, donde posteriormente
habrá una lista para modificar o elimnar un empleado registrado.
Author: David Demetrio López Paz
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplicación que da de alta a un nuevo empleado y que
                                      puede modificar o eliminar un empleado">
    <meta name="author" content="david demetrio lopez paz">

    <title>Nuevo Empleado</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
</head>

<body>
    <form action="agregarempleado.php" method="POST" name="nuevoempleado">
        <input type="text" name="nombre_empleado"> </br>
        <input type="number" name="empleado_edad"> </br></br>
        <input type="submit" value="Alta Empleado">
    </form>
</body>

</html>