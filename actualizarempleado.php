<?php
    $nombre = $_POST['nombre_empleado'];  
    $edad = $_POST['empleado_edad'];  
    $id = $_POST['empleado_id'];

    if(!empty($nombre && $edad && $id)){
        if (preg_match("/^\s+$/", $nombre))
            echo '<script type= "text/javascript"> alert(":( Error! No haz insertado ningún valor en el campo nombre."); window.location="listaempleado.php"</script>';
        else if (!(preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $nombre)))
            echo '<script type= "text/javascript"> alert(":( Error! No se pude hacer la insersión de los datos en la base de datos. Por favor llena el formulario de manera correcta."); window.location="listaempleado.php"</script>';
        else if (!(ctype_digit($edad)))
            echo '<script type= "text/javascript"> alert("Vaya! En el campo edad no uses la tecla espacio, vuelve a intentarlo por favor."); window.location="listaempleado.php"</script>';
        else if ($edad < 18 || $edad > 65)
            echo '<script type= "text/javascript"> alert("Vaya! En el campo edad no uses la tecla espacio, vuelve a intentarlo por favor."); window.location="listaempleado.php"</script>';
        else
            updateDatos();
    }

    else{
        echo '<script type="text/javascript">alert(":( Error! No se pude hacer la insersión de los datos en la base de datos. Por favor llena el formulario de manera correcta."); window.location = "listaempleado.php"</script>';
    }

/**FUNCION updateDatos */
function updateDatos(){
    include "basededatos.php";

    $nombre = $_POST['nombre_empleado'];
    $edad = $_POST['empleado_edad'];
    $id = $_POST['empleado_id'];

    $sql = "UPDATE empleado SET nombre = '$nombre', edad = '$edad' WHERE id = $id";
    $exito = mysqli_query($conexion,$sql);

    if($exito)
        header('location: listaempleado.php');
    else
        echo '<script type="text/javascript">alert("Falló la conexión con el servidor al intentar actualizar los datos. Inténtalo en otro momento, por favor."); window.location= "index.php"</script>';
    
    mysqli_free_result($exito);
    mysqli_close($conexion);  

}  
  
?>