<?php
    include "basededatos.php";

    $sql = "SELECT id,nombre,edad FROM empleado";
    $resultado = mysqli_query($conexion, $sql);
    mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista Empleado</title>
    
    <link type="text/css" href="estilos/layout.css" rel="stylesheet">
</head>

<body>
    <h1>Lista Empleados</h1>
    <ul>
        <?php
            while ($registro = mysqli_fetch_assoc($resultado)) //imprime en forma de lista los registros llevados hasta el momento
                {
                    echo '<li>' . $registro['nombre'] . '&nbsp(' . $registro['edad'] . '&nbspaños)&nbsp';
                    echo '<a href= "modificarempleado.php?empleadoid=' . $registro['id']. 
                         '">Modificar</a>&nbsp&nbsp';
                    echo '<a href= "eliminarempleado.php?empleadoid=' . $registro['id'] . 
                         '">Eliminar</a></li>';
                }
        ?>
    </ul>
</body>

</html>