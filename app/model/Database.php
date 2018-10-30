<?php

//namespace app\models;

//use PDO;
	/* 
	*  PDO DATABASE CLASS
	*  Connects Database Using PDO
	*  Creates Prepeared Statements
	* 	Binds params to values
	*  Returns rows and results
	*/
class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;
	
	private $conn;
	private $error;
	private $stmt;
	
	public function __construct() {
		
		// Set DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		$options = array (
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		);


		try {

			$this->conn = new PDO($dsn, $this->user, $this->pass, $options);

		//	echo $this->ping($this->host, );

		} catch (PDOException $e) { 
				echo 'ciao';
		}

	//	var_dump($this->conn);
	//	die ('<br>');
		//$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully"; 
	
			
			// $this->error = $e->getMessage();
		}





	public function getConnection(){  //var_dump($this->conn);
		
		return $this->conn;
	}
	
/*
	private function ping($host, $port, $timeout) 
	{ 
	  $tB = microtime(true); 
	  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout); 
	  if (!$fP) { return "down"; } 
	  $tA = microtime(true); 
	  return round((($tA - $tB) * 1000), 0)." ms"; 
	}
   */
   
}

