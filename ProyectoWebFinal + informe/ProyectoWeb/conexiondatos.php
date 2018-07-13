<?php
class AccesoDatos
{
	    private $conn=NULL;
	   
	    private $username="root";
		private $password="root";
	    

	  

   public function __construct()
	    {
	    	
	    	try{
	    		$dns="mysql:dbname=pediatria;host=127.0.0.1;port=3306";
		    	$this->conn = new PDO($dns, $this->username, $this->password);
		    	$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    	}catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    }
	    }
	    //hacer un insert

	    public function ejecutarSentencia($sql, $valores){
	    	try{
		    	$sentencia = $this->conn->prepare($sql);
		    	$sentencia->execute($valores);
	    		return $sentencia->rowCount();
	    	}catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    }
	    }
//hacer un select
	    public function consultar($sql, $valores){
	    try{
	    	$sentencia = $this->conn->prepare($sql);
	    	if (is_null($valores)){
	    		$sentencia->execute();
	    	}else{
	    		$sentencia->execute($valores);
	    	}
	    	
	    	
	    	return $sentencia->fetchAll();	
	    }catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		}
	    }

	    public function __destruct(){
	    	unset($conn);
	    }

	}




?>