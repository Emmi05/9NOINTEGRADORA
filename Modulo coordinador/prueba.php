<?php

include("../db.php"); 

if(isset($_POST['registrar'])){
        if(strlen($_POST['maestro']) >= 1 && 
           strlen($_POST['materia']) >= 1 &&
           strlen($_POST['carrera']) >= 1 &&         
           strlen($_POST['cuatri']) >= 1){
            
            $Maestro = trim($_POST['maestro']);
            $Materia = trim($_POST['materia']); 
            $Carrera = trim($_POST['carrera']);          
            $Cuatri = trim($_POST['cuatri']);
    
            $consulta = "INSERT INTO asig_materia(maestro, materia, carrera, cuatri) VALUES ('$Maestro','$Materia', '$Carrera','$Cuatri')";
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                ?> 
                <h3 class="ok">¡Se ha registrado correctamente!</h3>
               <?php
            } else {
                ?> 
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
            }
        } else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
    }     
}