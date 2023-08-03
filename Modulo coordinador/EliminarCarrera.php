<?php
if (!empty($_GET["id_carrera"])){
    include("../db.php");
    $ID = $_GET["id_carrera"];

    $eliminar = $conexion->query("DELETE FROM carrera WHERE id_carrera = '$ID'");
    if ($eliminar){
        echo "Eliminado Correctamente";
        header("location: Actualizareliminarcar.php");//aqui modifiqueee
    }else{
        echo "Error al eliminar";
    }
}
?>