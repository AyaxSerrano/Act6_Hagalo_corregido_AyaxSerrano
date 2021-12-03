<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Empleado</title>
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

                                    <input type="text" class="form-control mb-3" name="id_empleado" placeholder="id_empleado">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="apellidos">
                                    <input type="text" class="form-control mb-3" name="Departamento de trabajo" placeholder="departamento de trabajo">
                                    <input type="text" class="form-control mb-3" name="Horario de trabajo" placeholder="horario de trabajo">
                                    <input type="text" class="form-control mb-3" name="Productos vendidos" placeholder="productos vendidos">
                                    <input type="text" class="form-control mb-3" name="Caja que atiende" placeholder="caja que atiende">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Empleado</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Departamento que atiende</th>
                                        <th>Horario de trabajo</th>
                                        <th>Productos vendidos</th>
                                        <th>Caja que atiende</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_empleado']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['Departamento de trabajo']?></th>  
                                                <th><?php  echo $row['Horario de trabajo']?></th> 
                                                <th><?php  echo $row['Productos vendidos']?></th>  
                                                <th><?php  echo $row['Caja que atiende']?></th>      

                                                <th><a href="actualizar.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                    <a href="/DAWEB.SE/proyecto_Serrano_Hagalo/index.php">Inicio</a> 
            </div>
    </body>
</html>