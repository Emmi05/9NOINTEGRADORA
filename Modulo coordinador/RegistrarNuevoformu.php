<?php

include("../db.php"); 

if(isset($_POST['registrar'])){
        if(strlen($_POST['cuatri']) >= 1 &&               
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['desempeño']) >= 1 &&
        strlen($_POST['director']) >= 1 &&
        strlen($_POST['fecha']) >= 1 &&
        strlen($_POST['coordinador']) >= 1){ //x

            $cuatrimestre = trim($_POST['cuatri']);            
            $docente = trim($_POST['nombre']);
            $desempeño = trim($_POST['desempeño']);//x
            $director = trim($_POST['director']);//x
            $fecha = trim($_POST['fecha']);//x
            $coordinador = trim($_POST['coordinador']);//x

            //falta
            $consulta = "INSERT INTO pdf(cuatrimestre, nombre, desempeño,director,fecha,coordinador) VALUES ('$cuatrimestre', '$docente', '$desempeño', '$director','$fecha', '$coordinador')";
            $resultado = mysqli_query($conex,$consulta);
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