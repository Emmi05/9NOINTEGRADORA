<?php
include("conexion bd.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM asig_materia WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Asignación de Materias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <div class="container-fluid">
            <img src="../img/logo2.png" width="50" height="50">
          <a class="navbar-brand" href="indexCo.html">Módulo de Coordinador</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
             

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false">
                  Supervisión
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="SuperMa.php">Maestros</a>
                            <a class="dropdown-item" href="SuperMate.php">Materias</a>
                        </li>
                    </ul>
                                        
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Asignacion de Materias</a>
                     </li>
                            
                             <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                              data-bs-toggle="dropdown" aria-expanded="false">
                                Entrega de Documentos
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           
                                  <li class="dropdown-submenu">
                                      <a class="dropdown-item" href="consultar.html">Secuencias Didacticas</a>
                                      <a class="dropdown-item" href="ConsultarCarrera.php">Criterios de Evaluación</a>
                                     
                                  </li>
                              </ul>
                           </li>
                                </li>
                            </ul>
                         </li> 
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
            <form action="editarAsig.php" method="POST">
                    <h1>Editar asignación</h1>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                        <input type="text" class="form-control mb-3" name="maestro" placeholder="Ingrese nombre" value="<?php echo $row['maestro'] ?>">
                        <input type="text" class="form-control mb-3" name="carrera" placeholder="Carrera" value="<?php echo $row['carrera'] ?>">
                        <input type="text" class="form-control mb-3" name="grupo" placeholder="Grado y grupo" value="<?php echo $row['grupo'] ?>">
                        <input type="text" class="form-control mb-3" name="materia" placeholder="Materia" value="<?php echo $row['materia'] ?>">
                        <input type="text" class="form-control mb-3" name="cuatri" placeholder="Cuatrimestre" value="<?php echo $row['cuatri'] ?>">
                                    
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
        </div>
    </body>

</html>