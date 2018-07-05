<!DOCTYPE html>
<html>
<head>
	<title>Sing Up</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="./css/sing_up_css.css">
</head>
<body>
	<article>
		<form action="../Datos/conexion.php" method="POST">
		<div>
			<fieldset>
			<legend id="Datos">Datos requeridos:</legend>
				<div>
					<label>Nombre:</label>
					<input type="text" name="Nombre" placeholder="nombre"  class="color" autofocus required/><br>
					<label>Apellidos:</label>
					<input type="text" name="Apellido" placeholder="Apellidos"  class="color" required/><br>
					<label>Usuario:</label>
					<input type="text" name="Usuario" placeholder="nombre de usuario" class="color" required/><br>
					<label>Correo:</label>
					<input type="email" name="email" placeholder="ejemplo@gmail.com"  class="color" required/><br>
					<label>Password:</label>
					<input type="password" name="Password" placeholder="contraseña" maxlength="12" class="color" required/><br>
					<label>Confirm Password:</label>
					<input type="password" name="ComfirmContraseña" placeholder="Confirmar contraseña" maxlength="12" class="color" required/><br>

					<center><button type="submit" value="Aceptar" class="btns">Aceptar</button>						
					<a href="../index.php" class="btns">Cancelar</a></center>
				</div>

			</fieldset>
		</div>
	</form>
	</article>
</body>
</html>