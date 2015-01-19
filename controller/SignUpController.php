<?php
require_once('../civilian/SignUp.php');
require_once('../PgDatabase.php');

$connection=new PgDatabase();
$signup=new SignUp();

if($connection->is_connected()){
	$value=$signup->form_values();
	
	if($signup->is_police()){
		//has_null and is_police
		//header to police page and prompt error
	
	}else{
		//civilian
		if($signup->has_null()){
			header('Location:http://localhost:8080/crimemap/?signuperror=Fill%20in%20all%20fields.');	
		
		}else{
			//insert to db	
			//$connection->insert();
			header('Location:http://localhost:8080/crimemap/?successprompt=Login%20and%20Activate%20your%20account%20within%2024%20hours');	
		}
	}
	
}else{
	header('Location:http://localhost:8080/crimemap/?signuperror=Service%20temporarily%20unavailable.');
} 
?>