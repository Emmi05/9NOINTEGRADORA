<?php
if (!empty($_GET["id_maestro"])){
    include("../db.php");
    $ID = $_GET["id_maestro"];

    $eliminar = $conexion->query("DELETE FROM maestro WHERE id_maestro = '$ID'");
    if ($eliminar){
        echo "Eliminado Correctamente";
        header("location: actualizareliminardo.php");
    }else{
        echo "Error al eliminar";
    }
}
?>