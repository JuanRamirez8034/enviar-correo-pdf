<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/personalizados.css">

	<title>Formulario de registro</title>
</head>
<body id="fondo">
	<div class="container-sm col-4 mx-auto bg-light opacity-75 py-4 px-5 mt-4">
        <?php include("./assets/registrar.php");?>
		<form action="" method="POST" class="login-email">
            <p class="login-text text-center" style="font-size: 2rem; font-weight: 800;">Registro</p>
			<div class="input-group">
				<input type="text" class="form-control mt-2" placeholder="Usuario" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" class="form-control mt-2" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" class="form-control mt-2" placeholder="Contraseña" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" class="form-control mt-2" placeholder="Confirmar contraseña" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn btn-primary mt-3 d-block w-75 mx-auto">Registrarme</button>
                <p class="login-register-text d-block mt-5">¿Ya tienes cuenta?<a href="index.php" class="text-center">  Login</a></p>
			</div>
			
		</form>
	</div>
</body>
</html>