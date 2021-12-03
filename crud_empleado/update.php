<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$Departamento=$_POST['Departamento de trabajo'];
$horario=$_POST['Horario de trabajo'];
$productos=$_POST['Productos vendidos'];
$caja=$_POST['Caja que atiende'];

$sql="UPDATE empleado SET  id_empleado='$id_empleado',nombre='$nombre',apellido='$apellido',Departamento de trabajo='$departamento',Horario de trabajo='$horario',Productos vendidos='$productos',Caja que atiende='$caja' WHERE id_empleado='$id_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>