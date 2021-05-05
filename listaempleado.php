<?php
    include "basededatos.php";

    $sql = "SELECT id,nombre,edad FROM empleado"; //query a ejecutar.
    $resultado = mysqli_query($conexion, $sql);  //Comprobamos la correcta conexión a la db y la ejecución del query.
    mysqli_close($conexion); //cerramos la conexión a la db.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista Empleado</title>
</head>

<body>
    <h1 style="color:orange">Lista Empleados</h1>

    <!--Lista Empleados-->
    <ul>
        <?php
            /**Con el ciclo While mostrará todas las filas insertadas de los Empleados hasta el momento,
               en la variable $registro se almacenará cada fila en forma de array asociativo*/
            while ($registro = mysqli_fetch_assoc($resultado))
                {
                    echo '<li>' . $registro['nombre'] . '&nbsp(' . $registro['edad'] . '&nbspaños)&nbsp'; //imprime el valor asociado a 'nombre' y 'edad'
                    echo '<a href= "modificarempleado.php?empleadoid=' . $registro['id'].  //Enlaza a la página modificarempleado correspondiente a su valor asociado 'id'
                         '">Modificar</a>&nbsp&nbsp';                                      //mediante la palabra modificar.
                    echo '<a href= "eliminarempleado.php?empleadoid=' . $registro['id'] .  //Enlza a la página eliminarempleado correspondiente a su valor asociado en 'id'
                         '">Eliminar</a></li>';                                            //mediante la palabra eliminar.            
                }
        ?>
        <!--Regresar a la página principal: Alta Empleado-->
        <a href="index.php"><img style ="margin-top:15px" src= "flecha.png" width="20px" alt="Regresar" title="Regresar a Alta Empleado"></a>
    </ul>
    <!--Fin Lista Empleados-->
    
</body>

</html>
