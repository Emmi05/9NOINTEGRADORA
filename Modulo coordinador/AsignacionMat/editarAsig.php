<?php

include("conexion bd.php");
$con=conectar();

$id=$_POST['id'];
$maestro=$_POST['maestro'];
$carrera=$_POST['carrera'];
$grupo=$_POST['grupo'];
$cuatri=$_POST['cuatri'];
$materia=$_POST['materia'];

$sql="UPDATE asig_materia SET maestro='$maestro', carrera='$carrera', grupo='$grupo', cuatri='$cuatri', materia='$materia' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: asigmateria.php");
    }


?>