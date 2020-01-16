<?php

class Post{
	private $conn;
	private $table='country_currency';

	public $id;
	public $currencyId;
	public $currencyName;
	public $currencSymbol;
	public $alpha3;
	public $name;

	public function __construct($db){
		$this->conn = $db;
	}

	public function read(){
		$query = 'SELECT id,currencyId,currencyName,currencSymbol,alpha3,name 
		from '.$table;

		$stmt = $this->conn->prepare($query);
      	$stmt->execute();
      	return $stmt;
	}
}