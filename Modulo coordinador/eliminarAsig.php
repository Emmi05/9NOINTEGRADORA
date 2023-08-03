<?php
include ("../db.php");

$id=$_GET['id'];
$sql = "DELETE FROM asig_materia WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: asigmateria.php");
    }

?>