<?php 
    include("../db.php");
    include("nav.php");


    $sql="SELECT am.id, mae.nombre, mate.materia, car.carrera, cua.cuatrimestre
    FROM maestro AS mae INNER JOIN asig_materia AS am 
    ON mae.id_maestro = am.maestro 
    INNER JOIN materia AS mate 
    ON mate.id_materia = am.materia
    INNER JOIN carrera AS car 
    ON car.id_carrera = am.carrera
    INNER JOIN altacuatri AS cua 
    ON cua.id_cuatri = am.cuatri";

    $query=mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title> Asignación de Materias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shortcute icon" type="image/x-icon" href="../img/logo2.png">

    </head>
    <body>
    <?php
      $resultado = mysqli_query($conexion, "SELECT id_maestro, nombre FROM maestro");
      $resultado2 = mysqli_query($conexion, "SELECT id_materia, materia FROM materia");
      $resultado3 = mysqli_query($conexion, "SELECT id_carrera, carrera FROM carrera");
      $resultado4 = mysqli_query($conexion, "SELECT id_cuatri, cuatrimestre FROM altacuatri");
    ?>

 <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->

   <!--========================================================== -->
                        <!-- TABLAS -->
  <!--========================================================== -->


                <br>
                <br>
            <div class="container-sm">
                        
            <div class="col-md-20"> 
                           <form action="insertar.php" method="POST">
                             <h1>Asignación de Materias</h1>
                                 <input type="hidden" class="form-control mb-3" name="id">
                                 <select class="form-control mb-3"  name="maestro"> <!--id importante-->
                                   <option value="0">Seleccione al maestro</option>
                                   <?php
                                     while ($valores = $resultado->fetch_assoc()):
                                             $ID = $valores['id_maestro'];
                                             $Titulo = $valores['nombre'];
                                             echo "<option value=$ID>$Titulo</option>";
                                     endwhile
                                   ?>
                                 </select>
                                 <select class="form-control mb-3"  name="materia"> <!--id importante-->
                                   <option value="0">Seleccione la materia</option>
                                   <?php
                                     while ($valores2 = $resultado2->fetch_assoc()):
                                             $ID = $valores2['id_materia'];
                                             $Titulo = $valores2['materia'];
                                             echo "<option value=$ID>$Titulo</option>";
                                     endwhile
                                   ?>
                                 </select>
                                 <select class="form-control mb-3"  name="carrera"> <!--id importante-->
                                   <option value="0">Seleccione la carrera</option>
                                   <?php
                                     while ($valores3 = $resultado3->fetch_assoc()):
                                             $ID = $valores3['id_carrera'];
                                             $Titulo = $valores3['carrera'];
                                             echo "<option value=$ID>$Titulo</option>";
                                     endwhile
                                   ?>
                                 </select>
                                 <select class="form-control mb-3"  name="cuatri"> <!--id importante-->
                                   <option value="0">Seleccione el cuatrimestre</option>
                                   <?php
                                     while ($valores4 = $resultado4->fetch_assoc()):
                                             $ID = $valores4['id_cuatri'];
                                             $Titulo = $valores4['cuatrimestre'];
                                             echo "<option value=$ID>$Titulo</option>";
                                     endwhile
                                   ?>
                                 </select>
                                 <input type="submit" class="btn btn-primary" name="registrar">
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
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>

                               <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['materia']?></th>
                                                <th><?php  echo $row['carrera']?></th>
                                                <th><?php  echo $row['cuatrimestre']?></th>    
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