<?php

include("../db.php"); 

if(isset($_POST['registrar'])){
        if(strlen($_POST['Materia']) >= 1 &&           
           strlen($_POST['Cuatrimestre']) >= 1){
            
            $Materia = trim($_POST['Materia']);            
            $Cuatrimestre = trim($_POST['Cuatrimestre']);
            
            $consulta = "INSERT INTO materia(materia, cuatrimestre) VALUES ( '$Materia', '$Cuatrimestre')";
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