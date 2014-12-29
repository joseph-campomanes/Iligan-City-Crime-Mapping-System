<?php
require_once('AbstractDb.php');
require_once('InterfaceDb.php');

class PgDatabase extends AbstractDb implements InterfaceDb{
	
	function connect(){
		$connectionString='host='.$this->host.' '.
						  'port='.$this->port.' '.
						  'dbname='.$this->database.' '.
						  'user='.$this->username.' '.
						  'password='.$this->password;
		$this->connect=pg_connect($connectionString);
	}
	function add($sql){
		echo 'INSERT'.$sql;
	}
	function delete($sql){}
	function update($sql){}
	function retrieve($sql){
	$query='SELECT FROM';
	echo $sql['table_name'];
	}
}

$test=new PgDatabase();
//$test->connect();
?>