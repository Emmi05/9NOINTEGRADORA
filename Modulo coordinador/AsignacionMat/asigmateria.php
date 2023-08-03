<?php 
    include("conexion bd.php");
    $con=conectar();

    $sql="SELECT * FROM asig_materia";
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


   <!--========================================================== -->
                        <!-- TABLAS -->
  <!--========================================================== -->

            <div class="container mt-5">
                        
                        <div class="col-md-20">
                           
                                <form action="insertar.php" method="POST">
                                <h1>Asignación de Materias</h1>
                                    <input type="hidden" class="form-control mb-3" name="id">
                                    <input type="text" class="form-control mb-3" name="maestro" placeholder="Ingrese nombre">
                                    <input type="text" class="form-control mb-3" name="materia" placeholder="Materia">
                                    <input type="text" class="form-control mb-3" name="carrera" placeholder="Carrera">
                                    <input type="text" class="form-control mb-3" name="cuatri" placeholder="Cuatrimestre">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-20">
                        <h1> </h1>
                            <br><table class="table" >
                                <thead class="table-primary table-striped" >
                                    <tr>
                                        <th>Profesor</th>
                                        <th>Materia</th>
                                        <th>Carrera</th>
                                        <th>Cuatrimestre</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                               <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['maestro']?></th>
                                                <th><?php  echo $row['materia']?></th>
                                                <th><?php  echo $row['carrera']?></th>
                                                <th><?php  echo $row['cuatri']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminarAsig.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                                            
            </div>
        </body>
</html>