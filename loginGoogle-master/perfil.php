<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
</head>
<style>

  .perfil {
    width: 40%;
    margin: auto;
    text-align: center;
  }
  .perfil img{
    width: 200px;
  }
  body{
    background-color:#9b9c9a;
  }
  h2,h3{
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    color: #fff;
  }
  
</style>
<body>
   <?php
  require_once ('autentificacion.php');
?>
 
  <div class="perfil">
    <img src="imagenes/foto.png" alt="">
    <h2>Bienvenido <?php echo $name ?></h2>
    <h3><?php echo $email?></h3>
  </div>
</body>
</html>

