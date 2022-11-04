<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['idUsuario'];
$dni=$_POST['correousuario'];
$nombres=$_POST['clave'];
$apellidos=$_POST['estado'];

$sql="UPDATE Usaurio SET  correo='$correousuario',clave='$clave',estado='$estado',Rol='$idRolFK' WHERE idUsuario='$idUsuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>