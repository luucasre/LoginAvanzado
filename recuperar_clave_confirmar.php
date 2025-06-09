<?php 
// Conexion con la base
include "con_db.php";

$email = $_GET['e'];
$token = $_GET['t'];

$c = "SELECT CLAVE_NUEVA FROM recuperar WHERE EMAIL='$email' AND TOKEN='$token' LIMIT 1";
$f = mysqli_query($conex, $c);
$a = mysqli_fetch_assoc($f);

if (!$a) {
    echo $_SESSION['error'] = 'Solicitud no encontrada';
    die();
}

// OBTENEMOS LA CLAVE Y ACTUALIZAMOS AL USUARIO
$clave = $a['CLAVE_NUEVA'];
$clave_ = password_hash($clave, PASSWORD_DEFAULT, array("cost" => 10));
$c2 = "UPDATE usuario SET pass_cifrada='$clave_' WHERE email='$email' LIMIT 1";
mysqli_query($conex, $c2);

// ELIMINAR ESTA SOLICITUD DE RECUPERO
$c3 = "DELETE FROM recuperar WHERE EMAIL='$email' LIMIT 1";
mysqli_query($conex, $c3);

// MENSAJE DE CONFIRMACIÓN
echo '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; text-align: center;">
        <p style="font-size: 18px; color: green;">Contraseña actualizada satisfactoriamente, ya se puede loguear.</p>
        <div class="mt-4">
            <a href="inciarsesion.php" class="btn btn-secondary" style="padding: 10px 20px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 5px;">Iniciar sesión</a>
        </div>
      </div>';
?>