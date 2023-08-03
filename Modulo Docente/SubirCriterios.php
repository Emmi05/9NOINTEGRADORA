<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Subir Criterios</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcute icon" type="image/x-icon" href="../img/logo.png">

  </head>
  <body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
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
          <a class="navbar-brand" href="indexMa.html">&nbsp; <b> Módulo de Docente</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
             

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false">
                  <b>   Secuencia Didactica</b>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="SubirSecuencia.php">Subir</a>
                            <a class="dropdown-item" href="ConsultalistaSecuencia.php">Consultas</a>
                            </li>
                    </ul>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                        data-bs-toggle="dropdown" aria-expanded="false">
                          <b> Criterios de Evaluación</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             
                            <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="SubirCriterios.php">Subir</a>
                                    <a class="dropdown-item" href="ConsultalistaCriterios.php">Consultas</a>
                            </li>
                        </ul>   

                             <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                              data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Actas</b>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           
                                  <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="SubirActas.php">Subir</a>
                                    <a class="dropdown-item" href="ConsultalistaActas.php">Consultas</a>
                                       
                                  </li>
                              </ul>

                              <li class="nav-item">
                                
                                </a>
                                <a class="nav-link active" aria-current="page" href=""aria-expanded="false">
                                    <b>Consulta de Evaluacion Docente</b></a>
                             </li>
                                        

                           </li>
                                </li>
                            </ul>
                    </li> 
            </ul>
          </div>
        </div>
      </nav>
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivosCriterios/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos_Criterios(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
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
  }
  ?>


<!--FORMULARIO Criterios-->
        
           <br> 
           <form method="post" action="" enctype="multipart/form-data">
             <h1>Subir PDF</h1> 

  <div class="form-group">
    <label for="exampleFormControlFile1">Titulo</label>
    <input type="text" name="titulo">
    <label for="exampleFormControlFile1">Descripción</label>
    <input type="text" name="descripcion">
    <input type="file" name="archivo">

    <input type="submit" value="subir" name="subir">

    <br>
    <br>
    <button type="button" class="btn btn-info" ><a href="ConsultalistaCriterios.php">Consultar</a></button>
    <!-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> -->
  </div>
</form>
            
        
    </body>

</html>
