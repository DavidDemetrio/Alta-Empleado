<!--Project Name: Alta Empleado
Purpose Summary: Es una aplicación que permite dar de alta a un nuevo empleado validando el formulario
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

    <link rel="stylesheet" type="text/css" href="estilos/altaempleado.css">
</head>

<body>

    <div class="altaempleado_box">
        <h1>Alta Empleado</h1>

        <form action="agregarempleado.php" class="formulario" id="formulario" method="POST">

            <!--Grupo: Nombre-->
            <div class="formulario_grupo">
                <input type="text" class="formulario_input" id="nombre_empleado" name="nombre_empleado"
                    placeholder="Nombre(s)">
                <p class="formulario_input_error">El nombre solo puede llevar letras y espacios.</p> 
            </div>

            <!--Grupo:Edad-->
            <div class="formulario_grupo">
                <input type="text" class="formulario_input" id="empleado_edad" name="empleado_edad" placeholder="edad">
                <p class="formulario_input_error2">Edad debe ser de 18-65 años.</p>
            </div>

            <!--Botón de enviar-->
            <input type="submit" name="alta_empleado" value="Enviar">
        </form>

    </div>

    <script src="js/validacion.js"></script>
</body>

</html>
