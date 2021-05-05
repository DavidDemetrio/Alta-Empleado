<?php
    /**Declaración de variables las cuales se les asigna el valor correspondiente a su campo
        y que fueron enviadas desde el formulario Modificar Empleado mediante método POST*/
    $nombre = $_POST['nombre_empleado'];  
    $edad = $_POST['empleado_edad'];  
    $id = $_POST['empleado_id'];

    /**Si los campos del formulario Modificar Empleado no están vacíos has esto*/
    if(!empty($nombre && $edad && $id)){
        if (preg_match("/^\s+$/", $nombre))  //si el campo nombre contiene puros espacios, imprime el mensaje de abajo
            echo '<script type= "text/javascript"> alert(":( Error! No haz insertado ningún valor en el campo nombre."); window.location="listaempleado.php"</script>';
        else if (!(preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $nombre))) //si campo nombre es diferente de letras y espacios, imprime el mensaje de abajo
            echo '<script type= "text/javascript"> alert(":( Error! No se pude hacer la insersión de los datos en la base de datos. Por favor llena el formulario de manera correcta."); window.location="listaempleado.php"</script>';
        else if (!(ctype_digit($edad))) //si edad no es un número entero imprime el mensaje de abajo
            echo '<script type= "text/javascript"> alert("Vaya! En el campo edad no uses la tecla espacio, vuelve a intentarlo por favor."); window.location="listaempleado.php"</script>';
        else if ($edad < 18 || $edad > 65) //si edad no esta en el rango de 18-65 años, imprime el mensaje de abajo
            echo '<script type= "text/javascript"> alert("Vaya! En el campo edad no uses la tecla espacio, vuelve a intentarlo por favor."); window.location="listaempleado.php"</script>';
        else
            updateDatos();//si los casos anteriores son falsos, entonces llama a la funcion updateDatos();
    }
    /**Si algún campo del formulario Modificar Empleado está vacío.
        imprime el siguiente mensaje usando etiquetas js.*/
    else{
        echo '<script type="text/javascript">alert(":( Error! No se pude hacer la insersión de los datos en la base de datos. Por favor llena el formulario de manera correcta."); window.location = "listaempleado.php"</script>';
    }

/**FUNCION updateDatos */
function updateDatos(){
    include "basededatos.php";

    /**Declaracion de Variables*/
    $nombre = $_POST['nombre_empleado'];
    $edad = $_POST['empleado_edad'];
    $id = $_POST['empleado_id'];

    $sql = "UPDATE empleado SET nombre = '$nombre', edad = '$edad' WHERE id = $id"; //query a ejecutar
    $exito = mysqli_query($conexion,$sql);

    if($exito)  //si la conexión a la db fue exitosa, redirecciona a la lista de empleados
        header('location: listaempleado.php');
    else        //si no fue exitosa la conexión imprime el siguiente mensaje y redirecciona a  la página principal:Alta Empleado
        echo '<script type="text/javascript">alert("Falló la conexión con el servidor al intentar actualizar los datos. Inténtalo en otro momento, por favor."); window.location= "index.php"</script>';
    
    mysqli_free_result($exito);  //libera memoria del query $sql ejecutado
    mysqli_close($conexion);    //cierra la conexión a la db

}  
  
?>
