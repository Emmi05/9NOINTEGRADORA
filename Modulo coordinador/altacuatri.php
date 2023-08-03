<?php
include("nav.php");
?>
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


    <title>Alta del cuatrimestre</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcute icon" type="image/x-icon" href="../img/logo.png">

  </head>
 <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
  


     <!-- FORMULARIO DE ALTA CUATRI -->
     <form method="POST">
            <h1>ALTA CUATRIMESTRE</h1>
            <br><input type="hidden" name="IDcuatri"  placeholder="ID cuatri"><br>
            <br><input type="text" name="Cuatri"  placeholder="Nombre del Cuatrimestre"><br>
         
           
            <br><input type="submit" name="registrar"><br>
            
        </form>
        <?php
            include("guardaraltacuatri.php"); //Llama al documento donde se registran en la base de datos
            
        ?>
    </body>
</html>