<?php

	class car extends vehicle {
		
		
				public function display() {

				return "HELLO I AM ".__CLASS__.$this->color_f().$this->model_f().$this->wheels_f();
				}


	}



?>