<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT*FROM Usuario";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idUsuario" placeholder="idUsuario">
                                    <input type="text" class="form-control mb-3" name="correousuario" placeholder="correo">
                                    <input type="text" class="form-control mb-3" name="clave" placeholder="clave">
                                    <input type="text" class="form-control mb-3" name="estado" placeholder="estado">
                                    <input type="text" class="form-control mb-3" name="Rol" placeholder="Rol">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>correo</th>
                                        <th>clave</th>
                                        <th>estado</th>
                                        <th>Rol</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idUsuario']?></th>
                                                <th><?php  echo $row['correousuario']?></th>
                                                <th><?php  echo $row['clave']?></th>
                                                <th><?php  echo $row['estado']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>