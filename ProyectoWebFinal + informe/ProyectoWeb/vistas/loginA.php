<!doctype html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="./css/login_css.css">
	</head>
	<body>
		<article>
		<form action="../logA.php" method="POST">
		<div>
			<fieldset>
			<legend id="IngresarD">Ingrese sus Datos:</legend>
				<div class="Datos">
					<label>Usuario:</label>
					<input type="text" name="user" placeholder="nombre de usuario" class="color" /><br>
					<label>Password:</label>
					<input type="password" name="pass" placeholder="contraseña" class="color" /><br>		
				</div>
				
				<div id="btna">
					<input type="submit" name="aceptar" value="login" id="c" class="btns">
				</div>
			</fieldset>
		</div>
	</form>
	</article>
	</body>
</html>
