<?php
require_once('../modelo/usuarioclok.php');
//La funcion isset()nos permite evaluar si un variable esta definida

if(isset($_POST) && !empty($_POST)){
    $codigo =$_POST['txtusuario'];
    $nombre =$_POST['txtnombre'];
    $clave =$_POST['txtclave'];
    $confirmar =$_POST['txtconfirmar'];
    $tipo =$_POST['txttipo'];

//verificar que la clave y la confirmacacion son iguales

if($clave==$confirmar){
       //enviar las variables de set de cada variable

       $objUsuario=new Usuario();
       //enviar los datos a la clase
       $objUsuario->setUcodigo($codigo);
       $objUsuario->setUnombre($nombre);
       $objUsuario->setUclave($clave);
       $objUsuario->setUtipo($tipo);
       //verifica que los datos llegen a la clase

       echo $objUsuario->getUcodigo()."<br>";
       echo $objUsuario->getUnombre()."<br>";
       echo $objUsuario->getUclave()."<br>";
       echo $objUsuario->getUtipo()."<br>";

	//Invocar el metodo de modificacion
    $objUsuario->registrarUsuario();
}else{
  header('Location: ../vistas/formRegistrarUsuario.php?mensaje=errorclave');


    }
  }

?>