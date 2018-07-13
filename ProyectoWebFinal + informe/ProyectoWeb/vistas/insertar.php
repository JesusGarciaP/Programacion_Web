<?php
$product=$_POST['producto'];
$prec=$_POST['precio'];
$exist=$_POST['existencia'];

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "pediatria";


$carpeta="imagenesSubidas/";
opendir($carpeta);
$destino=$carpeta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'], $destino);
echo "imagen subida correctamente";
$nombre=$_FILES['foto']['name'];
echo "<img src=\"imagenesSubidas/$nombre\">";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ins = "INSERT INTO products (productName, precio, existencia) VALUES ('$product', '$prec', '$exist')";
if ($conn->query($ins) === TRUE) {
	echo "Producto agregado satisfactoriamente";
	header('Location:./tabla.php');
}

$conn->close();
?>