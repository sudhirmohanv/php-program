<?php

//mysqli object oriented Approach

require_once __DIR__.'/dbconnection.php';

class DB{
	
	protected $DB;
	
	public function __construct(){
		global $conn;
		$this->DB = $conn;
	}
	public function getConnection(){
	
		return $this->DB;
	}
}
$db = new DB();
#print_r($db->getConnection());


?>