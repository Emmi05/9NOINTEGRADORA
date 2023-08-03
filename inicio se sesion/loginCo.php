<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio de sesión | Coordinador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Inicio de sesion Coordinador
          </h4>
          <form class="form-box px-3">
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="text" name="user" placeholder="Usuario" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="pass" placeholder="Contraseña" required>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-block text-uppercase">
                Iniciar sesión
              </button>
            </div>


            <hr class="my-4">
            <div class="text-center mb-3">
              o iniciar sesion con
            </div>


            <center><div class="enlace">
                 <img src="loginGoogle-master/imagenes/ui.svg">
                 <?php require ('loginGoogle-master/autentificacion.php')?>
                <a href="<?php echo $client->createAuthUrl() ?>">Iniciar sesión con Google</a>
              </div></center>

            <!--<div class="enlace">
              <a class="btn btn-block btn-social btn-google" href="<?php echo $client->createAuthUrl() ?>" >
                <?php require ('loginGoogle-master/autentificacion.php')?>
                <span class="fa fa-google"></span> Iniciar sesion con Google
              </a>
            </div>-->

          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>