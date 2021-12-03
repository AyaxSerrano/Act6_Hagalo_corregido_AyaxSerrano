<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE id_empleado='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_empleado" value="<?php echo $row['id_empleado']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="Departamento de trabajo" placeholder="Departamento de trabajo" value="<?php echo $row['Departamento de trabajo']  ?>">
                                <input type="text" class="form-control mb-3" name="Horario de trabajo" placeholder="Horario de trabajo" value="<?php echo $row['Horario de trabajo']  ?>">
                                <input type="text" class="form-control mb-3" name="Productos vendidos" placeholder="Productos vendidos" value="<?php echo $row['Productos vendidos']  ?>">
                                <input type="text" class="form-control mb-3" name="Caja que atiende" placeholder="Caja que atiende" value="<?php echo $row['Caja que atiende']  ?>">


                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>