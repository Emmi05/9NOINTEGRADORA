<?php
	include("../db.php");
	if(!$conexion){
		echo"Error en la conexion con el servidor";
	}
    $id =$_POST['id'];
    $id_maestro =$_POST['id_maestro'];
	$carrera =$_POST['carrera'];
    $nombre =$_POST['nombre'];
    $carrera2 =$_POST['carrera2'];

    
       
        $actualizar="UPDATE maestro SET  carrera='$carrera', nombre='$nombre', carrera2='$carrera2' WHERE id_maestro='$id_maestro'";

        $ejecutar = mysqli_query($conexion, $actualizar);

        if($ejecutar){
            ?> 
            <h3 class="ok">¡Se ha actualizado correctamente!</h3>
           <?php
           header("location: ActualizarEliminarDo.php");
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
?>