<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>¿Olvidaste tu contraseña?</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f7f8fa;
			font-family: Arial, sans-serif;
		}
		.container {
			max-width: 400px;
			margin: 100px auto;
			background-color: white;
			padding: 30px;
			border-radius: 8px;
			box-shadow: 0 4px 10px rgba(0,0,0,0.1);
			text-align: center;
		}
		h2 {
			margin-bottom: 20px;
			color: #222;
		}
		label {
			display: block;
			text-align: left;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="email"] {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 6px;
			margin-bottom: 20px;
			font-size: 14px;
		}
		input[type="submit"] {
			width: 100%;
			background-color: #0a63f3;
			color: white;
			padding: 12px;
			border: none;
			border-radius: 6px;
			cursor: pointer;
			font-size: 15px;
			transition: background-color 0.3s ease;
		}
		input[type="submit"]:hover {
			background-color: #084bd1;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>¿Olvidaste tu contraseña?</h2>
		<form action="recuperar_clave.php" method="post">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" placeholder="Ingrese su email" required>
			<input type="submit" value="Enviar">
		</form>

		<?php 
		include "con_db.php";
		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email = mysqli_real_escape_string($conex, $_POST['email']);
			$c = "SELECT *, IFNULL(email, 'usuario') as email FROM usuario WHERE email='$email' LIMIT 1";
			$f = mysqli_query($conex, $c);
			$a = mysqli_fetch_assoc($f);
			if (!$a) {
				echo "<p style='color:red;'>Usuario inexistente.</p>";
				die();
			}

			$token = md5($a['email'] . time() . rand(1000, 9999));
			$clave_nueva = rand(10000000, 99999999);
			$c2 = "INSERT INTO recuperar SET email='$email', TOKEN='$token', FECHA_ALTA=NOW(), CLAVE_NUEVA='$clave_nueva' 
			ON DUPLICATE KEY UPDATE TOKEN='$token', CLAVE_NUEVA='$clave_nueva'";
			mysqli_query($conex, $c2);

			$link = "http://localhost/profe/recuperar_clave_confirmar.php?e=" . urlencode($email) . "&t=" . urlencode($token);

			$mensaje = <<<EMAIL
			<div style="text-align:left; margin-top:20px;">
			<p><strong>Hola {$a['email']}</strong></p>
			<p>Has solicitado recuperar tu contraseña. El sistema te ha generado una nueva clave:</p>
			<code style='background: lightyellow; color: darkred; padding: 2px 4px; font-size:16px;'>$clave_nueva</code>
			<p>Para activarla, hacé <a href='$link'>clic en este enlace</a>:</p>
			<code style='background: black; color: white; padding: 4px;'>$link</code>
			<p>Si no hiciste esta solicitud, simplemente ignorá este mensaje.</p>
			</div>
			EMAIL;

			echo $mensaje;
		}
		?>
	</div>
</body>
</html>