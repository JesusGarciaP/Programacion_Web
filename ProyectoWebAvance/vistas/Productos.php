<!doctype html>
<html>
	<head></head>
	<body>
		<form action="Productos.php" method="POST">
			<label>Producto</label>
			<input type="text" name="producto" id="prod">
			<label>Precio</label>
			<input type="number" name="precio">
			<label>Cantidad</label>
			<input type="number" name="cantidad">
			
			<input type="submit" name="Agregar" id="ok" value="Agregar">		
		</form><br>

        
<?php
ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');
error_reporting(0);

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Producto</th><th>Precio</th><th>Existencias</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}

$product=$_POST['producto'];
$precio=$_POST['precio'];
$existencias=$_POST['cantidad'];

$servidor = 'localhost:3306';
$username = 'root';
$password = 'root';
$BD = 'pediatria';	

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$BD", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 

    $sql = "INSERT INTO products (productName, precio, existencia)
   				VALUES ('$product', '$precio', '$existencias')";

$q = intval($_GET['q']);


if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "New record created successfully";
   	$stmt = $conn->prepare("SELECT productName, precio, existencia FROM products");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }

	
}
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    //echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    //echo '<meta http-equiv="Refresh" content="0.01;URL=../index.php">';

?>
	</body>
</html>
