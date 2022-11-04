<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM Usuario  WHERE idUsuario='$idUsuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>