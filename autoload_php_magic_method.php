<?php

class logger {
	
	public function log($msg){
		
		echo " $msg ";	
		
	}
	
	
}
$obj1=new logger();
$obj1->log("satpal");


class user {
	
	public $var ;
		
	
	public function cuser(){
		
		
	return $this->var->log("user create");
		
	}
	
	
	public function duser(){		
		
		
	return $this->var->log("user delete");

	}
	
	public function uuser(){
			
	return $this->var->log("user update");
			
	}
	public function __construct(logger $logger_obj){
	
		$this->var= $logger_obj;
	}
	
}

$logger_obj=new logger();

$user_obj=new user($logger_obj);

$user_obj->cuser();
$user_obj->duser();
$user_obj->uuser();
