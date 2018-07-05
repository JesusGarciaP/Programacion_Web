<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="./vistas/css/home_css.css">
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="./index.php">Home</a></li>
				<li><a href="./vistas/reservacion.html">Reservar cita</a></li>
				<li><a href="./vistas/catalogoProducts.php">Productos</a></li>
				<li><a href="./vistas/about.php">Acerca de:</a></li>
				<li class="Logout"><a href="./vistas/sing_up.php">Sing Up</a></li>
				<li class="Logout"><a href="./vistas/login.php">Login</a></li>			
			</ul>
		</nav>
		<div class="imagenes">
			<img src="./vistas/img/Pediatra-tepic.png" alt="Pediatra-tepic">
			<img src="./vistas/img/home.gif" alt="home">
			<img src="./vistas/img/Banner-portada.png" alt="Banner_portada">
		</div>
	</body>
</html>