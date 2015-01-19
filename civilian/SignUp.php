<?php
require_once('../AbstractSignUp.php');

class SignUp extends AbstractSignUp{
	
	public function form_values(){

		return [
				"fname"=>$this->fname,
				"mname"=>$this->mname,
				"lname"=>$this->lname,
				"pword"=>$this->pword,
				"uname"=>$this->uname,
				"bday"=>$this->bday,
				"addr"=>$this->addr,
				"email"=>$this->email
				];
	}
	
	public function has_null(){
	
		$values=[   
				$this->fname,
				$this->mname,
				$this->lname,
				$this->pword,
				$this->uname,
				$this->bday,
				$this->addr,
				$this->email
				];
		return count($values)!=count(array_diff($values,['',null,[]]));
	}
	
}

?>