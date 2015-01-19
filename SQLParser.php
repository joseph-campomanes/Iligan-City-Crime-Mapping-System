<?php

class SQLParser{

	public function insert($query){
		return $query;
	}
	
	public function select($query){
		$table=$query['table_name'];
		$attributes=array_key_exists('columns', $query)?$query['columns']:'*';
		$sql="";
		if(array_key_exists('where', $query)){
			$sql="SELECT ".$attributes." FROM ".$table." WHERE ".$query['where'];
		}else{
			$sql="SELECT ".$attributes." FROM ".$table;
		}
		
		echo $sql;
		//return $sql;
	}
	
	public function delete($query){
		return $query;
	}
	
	public function update($query){
		return $query;
	}
	
}
?>