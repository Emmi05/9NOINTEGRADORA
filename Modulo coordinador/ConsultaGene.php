<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->  <!-- Este tiene que ser "superMa.php" -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Consultas</title>
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
      
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
    <!--========================================================== 
                         SLIDER DE IMAGENES 
========================================================== -->
<br>
<center><h1>Consulta de los Catalogos</h1></center>
<br><br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="../img/maestro.png" class="rounded mx-auto d-block" width="160" height="160"  alt="...">
      <div class="card-body">
       <center> <a href="actualizareliminardo.php" class="btn  btn-warning">Consultar Docentes</a></center>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="../img/materia.png" class="rounded mx-auto d-block" width="160" height="160"  alt="...">
      <div class="card-body">
        <center> <a href="ActualizarEliminarMa.php" class="btn btn-primary">Consultar Materias</a> </center>
      </div>
    </div>
  </div>

<div class="col">
  <div class="card">
    <img src="../img/carreras.png" class="rounded mx-auto d-block" width="160" height="160" alt="...">
    <div class="card-body">
        <center> <a href="Actualizareliminarcar.php" class="btn btn-success">Consultar Carrera</a></center> 
    </div>
  </div>
</div>
</div>



    </body>
</html>