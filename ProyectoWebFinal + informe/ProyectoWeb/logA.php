<?php

require 'conexiondatos.php';

/*function getAllProductosJSON(){
		$ad = new AccesoDatos();
		$sql = "select * from productos";
		$datos = $ad->consultar($sql, NULL);
		return json_encode($datos);
	}

	function getAllProductos(){
		$ad = new AccesoDatos();
		$sql = "select * from productos";
		$datos = $ad->consultar($sql, NULL);
		return $datos;
	}
	
*/

	function controlador($accion){
		switch ($accion) {
			case 'login':
				// code...
				//header("Content-Type: application/json; charset=UTF-8");
				//$datos=getAllCategoriasJSON();
				//echo $datos;		
				autenticar();		
				break;
			
			default:
				// code...
				break;
		}
	}

	function autenticar (){

	$consulta='select username, password from users where username=? and password=?';

	$var=array($_POST['user'], $_POST['pass']);

	$acceso= new AccesoDatos();

	$acceder=$acceso->consultar($consulta, $var);
	
	if(count($acceder)>0){
		echo "<script> alert('Usuario logeado.'');</script>";
		header('Location: ./index3.php');
	}else{
		echo "<script> alert('Usuario o contraseña incorrectos.');</script>";
		header('Location:./vistas/login.php');

	}
}
	controlador($_POST["aceptar"]);
?>