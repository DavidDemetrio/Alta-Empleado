<?php
    include "basededatos.php";

    if(!empty($_POST['nombre_empleado']) && !empty($_POST['empleado_edad']) && !empty($_POST['empleado_id'])){
        $nombre = $_POST['nombre_empleado'];
        $edad = $_POST['empleado_edad'];
        $id = $_POST['empleado_id'];
        $sql = "UPDATE empleado SET nombre = '$nombre', edad = '$edad' WHERE id = $id"; 
        $exito = mysqli_query($conexion,$sql);

        if($exito){
            header('location: listaempleado.php');
        }
        else{
            header('location: nuevoempleado.php');
        }

    }
    else{
        header('location:nuevoempleado.php');
    }
?>