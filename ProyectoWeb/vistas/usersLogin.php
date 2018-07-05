<?php
ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');
error_reporting(0);

$usern=$_POST['user'];
$passw=$_POST['pass'];

$servidor = 'localhost:3306';
$username = 'root';
$password = 'root';
$BD='pediatria';

try {
        $conn = new PDO("mysql:host=$servidor;dbname=$BD", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully"; 
        
        if ($username!=null&&$password=!null) {
        	$iduser=null;
        	$query="SELECT * FROM users WHERE username=$usern and password=sha1($passw)";
        	$res=mysql_query($query);
        	while ($fila=mysql_fetch_array($res)) {
        		$iduser=$fila['idUser'];
        		break;
        	}
        	if (iduser==null) {
        		//echo "<scrip>alert('Acceso denegado usuario o contraseña incorrecta');</scrip>";
                        print "<script>alert(\"Acceso invalido.\");window.location='login.php';</script>";
        	} else {
        		session_start();
        		$_SESSION["iduser"]=$iduser;
			print "<script>window.location='../index.php';</script>";
				
        	}
        	
        }

        }
        catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        //echo $sql . "<br>" . $e->getMessage();
        }
      
        $conn = null;
?>