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

    public function __construct($db, $currencyId, $currencyName, $currencySymbol, $alpha3, $name) {
      $this->conn = $db;
      $this->currencyId = $currencyId;
      $this->currencyName = $currencyName;
      $this->currencySymbol = $currencySymbol;
      $this->alpha3 = $alpha3;
      $this->name = $name;
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

	public function writeNewCurrency(){
		try{
		    $query = 'INSERT into country_currency (
		    currencyId,
		    currencyName,
		    currencySymbol,
		    alpha3,
		    name)
		    values (
		    '.$this->currencyId.',
		    '.$this->currencyName.',
		    '.$this->currencySymbol.',
		    '.$this->alpha3.',
		    '.$this->name.'
		)';

		    $stmt = $this->conn->prepare($query);
      	    $stmt->execute();
		}catch(PDOException $e){
		    $stmt = "error".$e->getMessage();
		}
      	return $stmt;
	}
}