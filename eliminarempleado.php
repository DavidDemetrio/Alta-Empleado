<?php
    include "basededatos.php";

    if(!empty($_GET['empleadoid'])){
        $id = $_GET['empleadoid'];
    

        $sql = "DELETE FROM empleado WHERE id = $id";
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