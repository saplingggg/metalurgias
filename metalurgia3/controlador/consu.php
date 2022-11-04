<?php
require_once('../modelo/usuarioclok.php');
if (isset($_POST) && !empty($_POST)){
	$Ucodigo=$_POST['txtcodigo'];
    
    $objUsuario = new Usuario();
    $objUsuario->setUcodigo($Ucodigo);

	$filas=$objUsuario->consultaCodigo();
	if ($filas==null) {
		header('location: ../vistas/formEditarusua.php?mensaje=incorrecto')
	}else{
	      foreach($filas as $fila){
			$Unombre=$fila['Usua_nombre'];
			$Utipo=$fila['Usua_Tipo'];
		  echo $Unombre."<br>";
		  echo $Utipo;
		header('location: ../vistas/formEditarusua.php?mensaje=correcto'.$Unombre.'&tipo'.$tipo);
		
	}
}

	
}
?>