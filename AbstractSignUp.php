<?php

abstract class AbstractSignUp{
	public $fname;
	public $mname;
	public $lname;
	public $pword;
	public $uname;
	public $bday;
	public $addr;
	public $email;
	public $position;
	public $station;
	public $is_police;
	
	function __construct(){
		$this->fname=isset($_POST['fname'])?$_POST['fname']:NULL;
		$this->mname=isset($_POST['mname'])?$_POST['mname']:NULL;
		$this->lname=isset($_POST['lname'])?$_POST['lname']:NULL;
		$this->pword=isset($_POST['password'])?$_POST['password']:NULL;
		$this->uname=isset($_POST['username'])?$_POST['username']:NULL;
		$this->bday=isset($_POST['bday'])?$_POST['bday']:NULL;
		$this->addr=isset($_POST['addr'])?$_POST['addr']:NULL;
		$this->email=isset($_POST['email'])?$_POST['email']:NULL;
		$this->position=isset($_POST['username'])?$_POST['username']:NULL;
		$this->station=isset($_POST['username'])?$_POST['username']:NULL;
		$this->is_police=isset($_POST['police'])?$_POST['police']:NULL;
	}
	
	function is_police(){
		if($this->is_police=="true"){
			return true;
		}else{
			return false;
		}
	}	
}

?>