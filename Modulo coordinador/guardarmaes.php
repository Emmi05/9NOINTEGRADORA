<?php

include("../db.php"); 

if(isset($_POST['registrar'])){
        if(strlen($_POST['Nombre']) >= 1 &&           
       
        
        strlen($_POST['Carrera']) >= 1){
            
            $Nombre = trim($_POST['Nombre']);            
            $Carrera = trim($_POST['Carrera']);
            $Carrera2 = trim($_POST['Carrera2']);
            
            $consulta = "INSERT INTO maestro(nombre, carrera, carrera2) VALUES ( '$Nombre', '$Carrera','$Carrera2')";
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