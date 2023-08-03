<?php
	include("../db.php");
	if(!$conexion){
		echo"Error en la conexion con el servidor";
	}
    $id =$_POST['id'];
    $id_carrera =$_POST['id_carrera'];
	$carrera =$_POST['carrera'];
    $nivel =$_POST['nivel'];
 

    
       
        $actualizar="UPDATE carrera SET  id_carrera='$id_carrera', carrera='$carrera', nivel='$nivel' WHERE id_carrera='$id_carrera'";

        $ejecutar = mysqli_query($conexion, $actualizar);

        if($ejecutar){
            ?> 
            <h3 class="ok">¡Se ha actualizado correctamente!</h3>
           <?php
           header("location: Actualizareliminarcar.php");//aqui modifique 
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
?>