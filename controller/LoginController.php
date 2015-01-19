<?php
require_once('../Login.php');
require_once('../PgDatabase.php');

$login=new Login();
$connection=new PgDatabase();

 $test=['table_name'=>'accounts','where'=>'username='.$login->username.' AND password ='.$login->password];
// if connection exists. get connection;
// edit validate function()
if($connection->is_connected()){
	$query="SELECT * FROM accounts JOIN users ON accounts.user_id=users.user_id WHERE username='".$login->username.'\' AND password =\''.$login->password.'\'';
	$login->result=$connection->retrieve($query);
		
	if($login->validate() AND $login->is_police()){
		header('Location:http://localhost:8080/crimemap/police/');
	}else if($login->validate() AND !$login->is_police()){
		header('Location:http://localhost:8080/crimemap/civilian/');
	}else{
		header('Location:http://localhost:8080/crimemap/?error=Invalid username or password.&username='.$login->username.'');	
	}
	
}else{

	header('Location:http://localhost:8080/crimemap/#login?error=Service temporarily unavailable.');
}
var_dump($login->validate());

?>