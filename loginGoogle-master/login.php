<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Css/estilos.css">
  <title>Login</title>
</head>
<body>
  <div class="contenedor">
    <!-- <div class="imagen"> -->
      <img src="imagenes/img-login.jpg" alt="">
    <!-- </div>  -->
    <div class="formulario">
      <h2>Iniciar sesión</h2>
      <div class="email">
        <label>Correo Electronico</label>
        <input type="text" name="email" id="email" placeholder="Email">
      </div>    
      <div class="pass">
        <label>Contraseña</label>
        <input type="password" name="pass" id="pass" placeholder="Password">
      </div>    

      <div class="btn">
        <input type="submit" value="Iniciar Sesión" id="boton" disabled>
      </div>
      <div class="enlace">
         <img src="imagenes/ui.svg">
         <?php require ('autentificacion.php')?>
        <a href="<?php echo $client->createAuthUrl() ?>">Iniciar sesión con Google</a>
      </div>
    </div>  
  </div>
  <script src="validar.js"></script>
</body>
</html>