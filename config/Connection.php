<?php

Class Connection
{
	private $server = "mysql:host=localhost;dbname=db_supremo_crm";
	private $username = "###";
	private $password = "###";
	private $setMode  = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];
	protected $conn;
 	
	public function open() {
 		try {
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->setMode);

 			return $this->conn;

 		} catch (PDOException $e) {
 			echo "OPS! Falha na conexão: " . $e->getMessage();
 		}
 
    }
 
	public function close() {
   		$this->conn = null;
 	}
}
 