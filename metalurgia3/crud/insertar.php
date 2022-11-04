<?php
include("conexion.php");
$con=conectar();

$idUsuario=$_POST['idUsuario'];
$correousuario=$_POST['correo'];
$clave=$_POST['clave'];
$estado=$_POST['estado'];
$Rol=$_POST['Rol'];

$sql="INSERT INTO Usuario VALUES('$idUsuario','$correousuario','$clave','$estado','$Rol')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>