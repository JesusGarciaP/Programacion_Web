<!doctype html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="./css/login_css.css">
	</head>
	<body>
		<article>
		<form action="usersLogin.php" method="POST">
		<div>
			<fieldset>
			<legend id="IngresarD">Ingrese sus Datos:</legend>
				<div class="Datos">
					<label>Usuario:</label>
					<input type="text" name="user" placeholder="nombre de usuario" class="color" required/><br>
					<label>Password:</label>
					<input type="password" name="pass" placeholder="contraseña" maxlength="12" class="color" required/><br>		
				</div>
				
				<div id="btna">
					<button type="submit" value="Entrar" class="btns">Entrar</button>
					<label>O</label>
					<a href="sing_up.php">Registrarse</a>
				</div>
			</fieldset>
		</div>
	</form>
	</article>
	</body>
</html>
