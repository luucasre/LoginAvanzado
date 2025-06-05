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
    <h1 class="mb-4">Agenda de Contactos</h1>

    <?php 
    include("con_db.php");

    if (isset($_POST['register'])) {
      if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $pass = trim($_POST['pass']);
            $user = trim($_POST['user']);
            $pass_cifrada = password_hash($pass,PASSWORD_DEFAULT, array("cost"=>10));
            $consulta = "INSERT INTO usuario (nombre, apellido, email, user,pass_cifrada, pass) 
                         VALUES ('$nombre','$apellido','$email','$user', '$pass_cifrada','$pass')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                echo '<div class="alert alert-success" role="alert">
                        ¡Te has inscripto correctamente!
                      </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">
                        ¡Ups, ha ocurrido un error!
                      </div>';
            }
        } else {
            echo '<div class="alert alert-warning" role="alert">
                    ¡Por favor, complete los campos!
                  </div>';
        }
    }
    ?>
  </div>

  <div class="mt-3 mb-3">
        <a href="formregistro.html">volver a registrarse</a>
      </div>
</body>
</html>
