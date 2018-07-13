<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "pediatria";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT idProduct, productName, precio, existencia FROM products";
$result = $conn->query($sql);


echo "
	<table id='tabla2'>
		<tr>
			<th>Producto</th>
			<th>Precio</th>
			<th>Existencias</th>
			<th>Acciones</th>
		</tr>
	
";

while($row = $result->fetch_assoc()) {
	echo "
		<tr>
			<td >".$row["productName"]."</td>
			<td id='nprecio' data-id_precio='".$row["idProduct"]."' contenteditable>".$row["precio"]."</td>
			<td id='nexistencia' data-id_existencia='".$row["idProduct"]."' contenteditable>".$row["existencia"]."</td>
			<td><button id='eliminar' data-id_eli='".$row["idProduct"]."'>Eliminar</button></td>
		</tr>
	";
}

/*echo "
	<tr>
		<td id='producto_add' contenteditable></td>
		<td id='precio_add' contenteditable></td>
		<td id='existencia_add' contenteditable></td>
		<td><button id='add'>Agregar</button></td>
	</tr>
";*/

echo "</table>";

$conn->close();
?>