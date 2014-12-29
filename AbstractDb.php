<?php
abstract class AbstractDb{
	public $connection="";
	public $host="localhost";
	public $port="5432";
	public $database ="crimemap";
	public $username ="postgres";
	public $password = "pass";

	public function __construct(){
      $this->connect();
	}
	
	public function connect(){
	
	}
}
?>