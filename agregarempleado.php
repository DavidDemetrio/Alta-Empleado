<?php
    include "basededatos.php";  //conexión a la db.

    if(!empty($_POST['nombre_empleado']) && !empty($_POST['empleado_edad']))
            {
                $nombre = $_POST['nombre_empleado'];
                $edad = $_POST['empleado_edad'];

                $sql = "INSERT INTO empleado (nombre,edad)  
                        VALUES ('$nombre', '$edad')";
                
                $exito = mysqli_query($conexion,$sql); //devuelve un verdadero o false de la ejecución del query

                if($exito)
                    header('location: listaempleado.php'); // si query fue True, direcciona a listaempleado.php        
                else
                    header('location: index.php'); //redirecciona a la página principal
                    
            }
    else
        header('location:index.html');       
?>