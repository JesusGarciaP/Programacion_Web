<?php
$id=$_POST['id'];
$pre=$_POST['pre'];
$col=$_POST['col'];

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

$sql = "UPDATE products SET $col='$pre' WHERE idProduct=$id";

if ($conn->query($sql) === TRUE) {
    echo "se han actualizado los datos";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>