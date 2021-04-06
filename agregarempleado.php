<?php
    include "basededatos.php";

    if(!empty($_POST['nombre_empleado']) && !empty($_POST['empleado_edad'])){
        $nombre = $_POST['nombre_empleado'];
        $edad = $_POST['empleado_edad'];

        $sql = "INSERT INTO empleado (nombre,edad)  
                  VALUES ('$nombre', '$edad')";
        $exito = mysqli_query($conexion,$sql);

        if($exito){
            header('location: listaempleado.php');
        }
        else{
            header('location:index.php');
        }

    }
    else{
        header('location:index.php');
    }
?>