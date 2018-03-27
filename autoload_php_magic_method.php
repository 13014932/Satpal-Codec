<?php

class Logger {
	
	public function log($msg){
		
		echo " $msg ";	
		
	}
	
}
$obj1=new Logger();
$obj1->log("satpal");

class User {
	
	public $var ;
		
	
	public function createUser(){
			
	return $this->var->log("user create");
		
	}
		
	public function deleteUser(){		
			
	return $this->var->log("user delete");

	}
	
	public function updateUser(){
			
	return $this->var->log("user update");
			
	}
	public function __construct(Logger $logger_obj){
	
		$this->var= $logger_obj;
	}
	
}

$logger_obj=new Logger();

$user_obj=new User($logger_obj);

$user_obj->createUser();
$user_obj->deleteUser();
$user_obj->updateUser();
