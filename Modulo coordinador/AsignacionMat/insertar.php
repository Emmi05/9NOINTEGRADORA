<?php
include("conexion bd.php");
$con=conectar();

$id=$_POST['id'];
$maestro=$_POST['maestro'];
$carrera=$_POST['carrera'];
$grupo=$_POST['grupo'];
$cuatri=$_POST['cuatri'];
$materia=$_POST['materia'];


$sql="INSERT INTO asig_materia VALUES('$id','$maestro','$carrera','$grupo','$cuatri','$materia')";
$query= mysqli_query($con,$sql);

    if($query){
    Header("Location: asigmateria.php");
    
    }else {
        }
?>