<?php
	include("../db.php");
	if(!$conexion){
		echo"Error en la conexion con el servidor";
	}
    $id =$_POST['id'];
    $MateriaID =$_POST['id_materia'];
	$Materia =$_POST['materia'];
    $Cuatrimestre =$_POST['cuatrimestre'];
          
       
        $actualizar="UPDATE materia SET  materia='$Materia', cuatrimestre='$Cuatrimestre' 
                     WHERE id_materia='$MateriaID'";

        $ejecutar = mysqli_query($conexion, $actualizar);

        if($ejecutar){
            ?> 
            <h3 class="ok">¡Se ha actualizado correctamente!</h3>
           <?php
           header("location: ActualizarEliminarMa.php");
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
?>