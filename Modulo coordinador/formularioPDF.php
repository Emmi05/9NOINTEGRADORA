<!-- FORMULARIO DE  pdf -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Asignación de Materias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
    <nav class="navbar navbar-light px-3" style="background-color: #33afce;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../img/tel.png" alt="" width="25" height="23" class="d-inline-block align-text-top">
          744-6886416
          &nbsp;&nbsp;&nbsp;
          <img src="../img/email.png" alt="" width="25" height="23" class="d-inline-block align-text-top">
          universidad@utacapulco.edu.mx
        </a>
        <span class="navbar-brand">
          <a href="https://twitter.com/Utacapulco1?fbclid=IwAR0ubBqljQAPuYPeqIghPRinCQqtSGfVIeldjSJVRKl4ukWes3QQB_YPDQc"><img src="../img/tw.png" alt="" width="25" height="23"></a>
          &nbsp;
          <a href="https://www.facebook.com/Oficial-Universidad-Tecnol%C3%B3gica-de-Acapulco-1982044402027945"><img src="../img/facebook.png" alt="" width="25" height="23"></a>
          &nbsp;
          <a href="https://utacapulco.edu.mx/"><img src="../img/web.png" alt="" width="25" height="23"></a>
          &nbsp;
        </span>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <div class="container-fluid">
            <img src="../img/logo2.png" width="60" height="60">
          <a class="navbar-brand" href="indexCo.html">&nbsp; <b> Módulo de Coordinador</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false">
                  <b>Consulta de Documentación</b>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="">Secuencia Didactica</a>
                            <a class="dropdown-item" href="">Criterios de la Evaluación</a>
                        </li>
                    </ul>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                        data-bs-toggle="dropdown" aria-expanded="false">
                          <b>Evaluación</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">                                            
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="">Evaluar Maestro</a>
                                    <a class="dropdown-item" href="">Consulta de Evaluación</a>
                                </li>
                            </ul>   

                             <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                              data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Altas</b>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           
                                  <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="altacuatri.php">Cuatrimestre</a>
                                      <a class="dropdown-item" href="asigmateria.php">Asignación de Materias</a>
                                     
                                  </li>
                              </ul>

                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                                data-bs-toggle="dropdown" aria-expanded="false">
                                  <b>Catalogos</b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="catalogomaes.php">Catalogo de Maestros</a>
                                        <a class="dropdown-item" href="catalogomate.php">Catalogo de Materias</a>
                                        <a class="dropdown-item" href="catalogocarre.php">Catalogo de Carreras</a>
                                    </li>
                                </ul>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="ConsultaGene.php"><b>Consultas</b></a>
                                 </li>
                           </li>
                                </li>
                            </ul>
                         </li> 
            </ul>
          </div>
        </div>
      </nav>

<?php
    $mysqli = mysqli_connect("localhost","root","emma123","Blog"); 
    $cuatri = mysqli_query($mysqli, "SELECT cuatrimestre FROM altacuatri");
    $maestro = mysqli_query($mysqli, "SELECT nombre FROM maestro");
?>
<div class="container w-25 border p-4 mt-4">
<form method="POST">
            <h1>Formulario</h1>
            <div class="form_group">
            <select type="text"  name="cuatri" class="form_input" placeholder=" "> <!--id importante-->
            <option value="0">seleccione el cuatrimestre</option>
                <?php
                while ($valor = $cuatri->fetch_assoc()):
                    $cuatrimestre = $valor['cuatrimestre'];
                    echo "<option value=$cuatrimestre>$cuatrimestre</option>";
                endwhile
                ?>
            </select>
            </div>

            <div class="form_group">
            <select type="text"  name="docente" class="form_input" placeholder=" "> <!--id importante-->
            <option value="0">Seleccione al docente</option>
                <?php
                while ($valores = $maestro->fetch_assoc()):
                    $docente = $valores['nombre'];
                    echo "<option value=$docente>$docente</option>";
                endwhile
                ?>
            </select>
            </div>

            <div class="form_group">
            <select type="text"  name="desempeño" class="form_input" placeholder=" "> <!--id importante-->
                    <option value="0">Seleccione el desempeño</option>
                    <option value="Excelente">Excelente</option>
                    <option value="Regular">Regular</option>
                    <option value="Deficiente">Deficiente</option>
            </select>
            </div>

            <br><input type="text" name="director" max="20" placeholder="Director academico"><br>
            <br><input type="date" name="fecha" max="20" placeholder="fecha"><br>
            <br><input type="text" name="coordinador" max="20" placeholder="coordinador"><br> 
            <!-- <br><input type="text" name="desempeño" max="20" placeholder="Desempeño, medio, excelente, bueno, muy bueno?"><br> -->
            <br><input type="submit" name="registrar"><br>
      
</form>
        <?php
            include("guardarpdf.php"); //Llama al documento donde se registran en la base de datos
        ?>
</div>                                          

</body>
</html>