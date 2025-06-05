<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"> <!-- Esto asegura que el navegador interprete los acentos y la Ñ -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="post">
      <div class="form-group mb-3">
        <label for="user">Usuario</label>
        <input required type="text" id="user" name="user" class="form-control" placeholder="Ingresar usuario">
      </div>
      <div class="form-group mb-3">
        <label for="pass">Contraseña</label>
        <input required type="password" id="pass" name="pass" class="form-control" placeholder="Ingresar contraseña">
      </div>

        <div class="enlace">
         <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000">
         <?php require ('autentificacion.php')?>
        <a href="<?php echo $client->createAuthUrl() ?>">Iniciar sesión con Google</a>
      </div>

      <div class="mt-3 mb-3">
        <a href="recuperar_clave.php">¿Se me olvidó la contraseña?</a>
      </div>
      <button type="submit" name="login" class="btn btn-primary">Iniciar sesión</button>
    </form>

    <!-- Botón para ir al formulario de registro -->
    <div class="mt-4">
        <a href="formregistro.html">Volver a Registrarse</a>
    </div>
  </div>
</body>
</html>