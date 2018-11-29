<?php
	class truck extends vehicle { 
		
	public function display() {
		 
		 
		return "HELLO I AM  ".__class__.$this->color_f().$this->model_f().$this->wheels_f();

	}

	}



?>