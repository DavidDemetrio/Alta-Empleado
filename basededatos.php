<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$nombredb = "empresa";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $nombredb);

if (!$conexion)
	die("Conexion fallida :" .mysqli_connect_error());
?>