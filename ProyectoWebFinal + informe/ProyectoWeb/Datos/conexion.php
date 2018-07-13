<?php
$name=$_POST['Nombre'];
$apellidos=$_POST['Apellido'];
$usuario=$_POST['Usuario'];
$correo=$_POST['email'];
$pass=$_POST['Password'];
 
$servidor = 'localhost:3306';
$username = 'root';
$password = 'root';
$BD='pediatria';

        try {
        $conn = new PDO("mysql:host=$servidor;dbname=$BD", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully"; 
        $sql = "INSERT INTO users (FirstName, LastName, username, email, password, tipo)
                VALUES ('$name', '$apellidos', '$usuario', '$correo','$pass','Client')";

                // use exec() because no results are returned
                $conn->exec($sql);
                //echo "New record created successfully";
        }
        catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        //echo $sql . "<br>" . $e->getMessage();
        }
      
        $conn = null;
        echo '<meta http-equiv="Refresh" content="0.001;URL=../index.php">';
?>