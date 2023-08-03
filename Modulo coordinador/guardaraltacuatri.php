<?php

include("../db.php"); 

if(isset($_POST['registrar'])){
        if(strlen($_POST['Cuatri']) >= 1){
            
            $Cuatrimestre = trim($_POST['Cuatri']);            
            
            $consulta = "INSERT INTO altacuatri(cuatrimestre) VALUES ( '$Cuatrimestre')";
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