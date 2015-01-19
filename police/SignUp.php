<?php
require_once('../AbstractSignUp.php');

class SignUp extends AbstractSignUp{
	
	public function form(){
		return [
				"fname"=>$this->fname,
				"mname"=>$this->mname,
				"lname"=>$this->lname,
				"pword"=>$this->pword,
				"uname"=>$this->uname,
				"bday"=>$this->bday,
				"addr"=>$this->addr,
				"email"=>$this->email
				"position"=>$this->position,
				"station"=>$this->station
				];
	}
	
	public function missing_value(){
		
	}
}

?>