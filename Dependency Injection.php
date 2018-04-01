<?php

class Logger {
	
	public function log($msg){
		
		echo " $msg ";	
		
	}
	
}
$logger_obj=new Logger();
$logger_obj->log("hello satpal");

class User {
	
	public $var ;
		
	
	public function createUser(){
			
	return $this->var->log("New user created");
		
	}
		
	public function deleteUser(){		
			
	return $this->var->log("user deleted");

	}
	
	public function updateUser(){
			
	return $this->var->log("user info updated");
			
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
