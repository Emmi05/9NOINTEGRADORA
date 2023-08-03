<?php
if (!empty($_GET["id_materia"])){
    include("../db.php");
    $ID = $_GET["id_materia"];

    $eliminar = $conexion->query("DELETE FROM materia WHERE id_materia = '$ID'");
    if ($eliminar){
        echo "Eliminado Correctamente";
        header("location: ActualizarEliminarMa.php");
    }else{
        echo "Error al eliminar";
    }
}
?>