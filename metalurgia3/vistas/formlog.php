<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/cabecera.css">
    <title>Login</title>
    <nav>
        <br>
            <ul>
            <li><a href="../index.php">Inicio</a></li>
            <nav>
</head>

<body>

<?php 
	if ($_GET){
	$mensaje=$_GET['error'];
				
	if($mensaje=='errorclave'){
	echo "<div class='alert alert-danger'> <font color='red'> La clave y la confirmación no coinciden, verifique y reintente </div> </font>";
	}else{
	if($mensaje=='incorrecto'){
	echo "<div class='alert alert-danger'> El usuario ya existe verifique y reintente </div> ";
	}else{
	echo "<div class='alert alert-success'> El usuario  fue registrado correctamente</div>";
	}
	}
	}
	?>


    <div id="login">
       
    <form action="../controlador/ctrlogin.php " method="POST">
   <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>
   <p>Correo <input type="maill" placeholder="ingrese su correo" name="txtcorreo"require ></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="txtclave" require></p>
   <input type="submit" value="Ingresar">
    </div>
    </div>
                    <div id="register-link" class="text-right">
                    <a href="formregistro.php" class="text-info">Regístrate aquí</a>
                                        </div>
     
</div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>




<body style='background-image:url("../aplicaciones/img/fondo.jpg"); background-size:cover; background-repeat: no-repeat;'>

<div style="display: flex; align-items:center; justify-content:center; min-height:100vh;">

 


</div>

</body>
</html>