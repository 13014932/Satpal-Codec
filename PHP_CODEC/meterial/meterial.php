<?php

include 'STOCK\inventory.php';
					class laptop extends inventory{
			
						public function laptop_f(){
							$a =$this->LowLevelOrderQuantity=3;
								return $a;
			}
		
	}
	
class accessories extends inventory
{
		public function accessories_f(){
			$b=$this->LowLevelOrderQuantity=5;
				return $b;
		}
}

?>