<?php

class Database{
	
	private $host = 'localhost'
	private $db_name = 'ahzameec_Currency'
	private $username = 'ahzameec'
	private $password = 'Symphony@1992!!ah'
	private $conn;

	public function connect()
	{
		$this->conn = null;

		try{
			$this->conn = new PDO('mysql:host='.$this->host.'dbname='.$this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO:ATTR_ERRORMODE, PDO: ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo 'Connection Error: '.$e.getMessage();
		}
	}
}

