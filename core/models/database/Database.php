<?php 

// Extracting Database class from PDO
class Database extends PDO
{
	public function __construct()
	{	
		// initializing database connection  
		parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
	}
}

?>