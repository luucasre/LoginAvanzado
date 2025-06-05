<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agenda de Contactos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">Resultado del Inicio de Sesión</h1>

    <?php 
    include("con_db.php");

    if (isset($_POST['login'])) {
        if (!empty($_POST['user']) && !empty($_POST['pass'])) {
            $user = trim($_POST['user']);
            $pass = trim($_POST['pass']);

            $consulta = "SELECT * FROM usuario WHERE user='$user' AND pass='$pass'";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado && mysqli_num_rows($resultado) > 0) {
                echo '<div class="alert alert-success" role="alert">
                        Inicio de sesión exitoso. ¡Bienvenido!
                      </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">
                        Usuario o contraseña incorrectos.
                      </div>';
            }
        } else {
            echo '<div class="alert alert-warning" role="alert">
                    ¡Por favor, complete todos los campos!
                  </div>';
        }
    }
    ?>
     
    <div class="mt-3 mb-3">
      <a href="formregistro.html" class="btn btn-secondary">Registrarse</a>
      <a href="inciarsesion.php" class="btn btn-primary">Volver a Iniciar Sesión</a>
    </div>
  </div>
</body>
</html>
