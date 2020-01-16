<?php

class Post{
	private $conn;
	private $table='country_currency';

	public $id;
	public $currencyId;
	public $currencyName;
	public $currencySymbol;
	public $alpha3;
	public $name;

	public function __construct($db) {
      $this->conn = $db;
    }

	public function read(){
		try{
		    $query = 'SELECT id,currencyId,currencyName,currencySymbol,alpha3,name FROM country_currency';

		    $stmt = $this->conn->prepare($query);
      	    $stmt->execute();
		}catch(PDOException $e){
		    $stmt = "error".$e->getMessage();
		}
      	return $stmt;
	}
}