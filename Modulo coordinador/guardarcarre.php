<?php

include("../db.php"); 

if(isset($_POST['registrar'])){
        if(strlen($_POST['Carrera']) >= 1 &&           
       
        
        strlen($_POST['Nivel']) >= 1){
            
            $Carrera = trim($_POST['Carrera']);            
            $Nivel = trim($_POST['Nivel']);
            
            $consulta = "INSERT INTO carrera(carrera, nivel) VALUES ( '$Carrera', '$Nivel')";
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