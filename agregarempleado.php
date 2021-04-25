<?php
$nombre = $_POST['nombre_empleado'];
$edad = $_POST['empleado_edad'];

if (!empty($nombre) && !empty($edad)) {
    if (preg_match("/^\s+$/", $nombre))
        echo '<script type= "text/javascript"> alert(":( Error! No se pude hacer la insersión de los datos en la base de datos. Por favor llena el formulario de manera correcta."); window.location="index.html"</script>';
    else if (!(preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $nombre)))
        echo '<script type= "text/javascript"> alert(":( Error! No se pude hacer la insersión de los datos en la base de datos. Por favor llena el formulario de manera correcta."); window.location="index.html"</script>';
    else if (!(ctype_digit($edad)))
        echo '<script type= "text/javascript"> alert("Vaya! En el campo edad no uses la tecla espacio, vuelve a intentarlo por favor."); window.location="index.html"</script>';
    else if ($edad < 18 || $edad > 65)
        echo '<script type= "text/javascript"> alert("Vaya! En el campo edad no uses la tecla espacio, vuelve a intentarlo por favor."); window.location="index.html"</script>';
    else
        insertDatos();
} else 
    echo '<script language= "javascript">alert("Por favor llena el formulario correctamente."); window.location="index.html"</script>';

//**FUNCION isertDatos */
function insertDatos()
{
    include 'basededatos.php';

    $nombre = $_POST['nombre_empleado'];
    $edad = $_POST['empleado_edad'];

    $sql = "INSERT INTO empleado (nombre, edad) VALUES ('$nombre', '$edad')";
    $exito = mysqli_query($conexion, $sql);   //comprueba que el query se inserte de manera correcta
   
    if ($exito)
        header('location: listaempleado.php');
    else
<<<<<<< HEAD
        header('location:index.html');       
=======
        echo '<script language="javascript">alert(":( Error! No se pudo hacer la insersión de los datos en la base de datos. Por favor, vuelve a intentarlo."); window.location = "index.html"</script>';
    
    mysqli_free_result($exito);
    mysqli_close($conexion);
}
>>>>>>> prueba
?>