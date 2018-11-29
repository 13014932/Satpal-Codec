<?php

	class student {
		public $s_name;
		public $s_roll_num;
		public $s_marks;
		
		public function __construct($s_name,$s_roll_num,$s_marks){
			
			$this->s_name=$s_name;
			$this->s_roll_num=$s_roll_num;
			$this->s_marks=$s_marks;
			
		}
		public function display()
		{
			print	"student name is ".$this->s_name."<br>";
			print	"student roll No is ".$this->s_roll_num."<br>";
			print	"student avg marks is ".$this->s_marks->avg_marks()."<br>";
			print	"student obtain <b>".$this->s_marks->total_mark()." </b>out off <u><b>100</b></u>"."<br><br>";
		
		}		
		
		
		

	}

?>