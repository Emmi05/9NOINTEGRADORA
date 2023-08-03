<?php
include ("conexion bd.php");
$con=conectar();

$id=$_GET['id'];
$sql = "DELETE FROM asig_materia WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: asigmateria.php");
    }

?>