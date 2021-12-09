<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<link rel="stylesheet" href="./css/personalizados.css">

	<title>Iniciar sesión</title>
</head>
<body id="fondo">
	
	<div class="container-sm col-4 mx-auto bg-light opacity-75 py-4 px-5 mt-4">
		<?php include('./assets/login.php');?>
		<form action="" method="POST" class="form-signin">
			<p class="login-text text-center" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" class="form-control mt-2" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" class="form-control mt-2" placeholder="Contraseña" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn btn-warning d-block w-75 mx-auto mt-4">Acceder</button>
			</div>
			<div class="row mt-4">
			<p class="login-register-text">¿No tienes cuenta? <a href="register.php">Regístrate aquí</a>.</p>
			</div>
		</form>
	</div>
</body>
</html>