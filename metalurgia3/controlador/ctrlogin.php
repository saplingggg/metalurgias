<?php
require_once('../modelo/usuariocls.php');
   if(isset($_POST) && !empty($_POST)){
       $usuario = $_POST['txtcorreo'];
       $clave = $_POST['txtclave'];
       //crear objeto de la clase
       $objUsuario=new Usuario();
       //envia datos a la clase
       $objUsuario->setCorrerousuario($usuario);
       $objUsuario->setUclave($clave);
       //VERIFICAR SI EL LOGIN DE LA CLASE ES TRUE O FALSE
       if($objUsuario->login()==true){
           header('location:../vistas/menu.php');
       }else{
           header('location:../vistas/formlog.php?fallo=error');
       }
}

?>
