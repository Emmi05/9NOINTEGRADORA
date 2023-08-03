<?php

include("../db.php"); 

if(isset($_POST['registrar'])){
        if(strlen($_POST['maestro']) >= 1)
        if(strlen($_POST['materia']) >= 1)
        if(strlen($_POST['carrera']) >= 1)
        if(strlen($_POST['cuatri']) >= 1){
            
            $maestro = trim($_POST['maestro']);            
            $materia = trim($_POST['materia']);
            $carrera = trim($_POST['carrera']);
            $cuatri = trim($_POST['cuatri']);



            $consulta = "INSERT INTO asig_materia(maestro,materia,carrera,cuatri) VALUES ( '$maestro','$materia', '$carrera','$cuatri')";
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                ?> 
                <h3 class="ok">Dios te ha mirado a los ojos</h3>
               <?php
               header("location: asigmateria.php");
            } else {
                ?> 
                <h3 class="bad">Hubo un problema al insertar</h3>
                <?php
            }
        } else {
        ?> 
        <h3 class="bad">Te falto un dato</h3>
        <?php
    }     
}