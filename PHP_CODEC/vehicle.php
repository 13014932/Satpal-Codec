<?php
	class vehicle {
		
		public $color;
		public $num_wheels;
		public $model;
			public function __construct($color,$model,$num_wheels){
				$this->color=$color;
				$this->num_wheels=$num_wheels;
				$this->model=$model;
				
			}	
			public function display(){
				
			}
			public function color_f()
			{
					return " OF ".$this->color." COLOR";
					
			}			
			
			public function model_f()
			{
				return " OF MODEL ".$this->model." ";
			}
			public function wheels_f()
			{
				
				return " CONTAIN ".$this->num_wheels." WHEELS";
			}
	}
?>