<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css">
	<title>Crear cuenta</title>
</head>
<body>
	<main>
		<div class="login form-container">
			<form action="register_user.php" class="login-form" method="POST">
				<h1 class="texto-centrado">Crear cuenta</h1>
				<div class="fila">
					<label for="username">Nombre de usuario</label>
					<input id="username" class="form-control" type="text" name="username" autocomplete="off">
				</div>
                <div class="fila">
					<label for="email">Correo electrónico</label>
					<input type="email" class="form-control" name="email" id="email">
				</div>
                <div class="fila">
					<label for="password">Contraseña</label>
					<input type="password" class="form-control" name="password" id="password">
				</div>
                <div class="fila">
					<label for="repetirPassword">Repetir Contraseña</label>
					<input type="password" class="form-control" name="repetirPassword" id="repetirPassword">
				</div>
                <div class="fila texto-centrado">
					<a href="index.php" class="link">Iniciar sesión</a>
				</div>
				<div class="fila texto-centrado">
					<button class="btn" id="btnCrear">Crear cuenta</button>
				</div>
			</form>
		</div>
	</main>
</body>
</html>
