<?php
class Login{
	public $username="";
	public $password="";
	public $id="";

	function __construct()
	{
		$this->username=isset($_POST['username'])?$_POST['username']:NULL;
		$this->password=isset($_POST['password'])?$_POST['password']:NULL;
	}

	public function validate()
	{
	
	//return true/false;
	}

	}
?>