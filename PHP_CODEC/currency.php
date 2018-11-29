<?php

include 'collection_box.php';

	class currency extends collection_box
	{
		
				public function doller()
				{			
						$d= ((($this->coin)*($this->num_coin))+(($this->notes)*($this->num_notes)))	;
						
						$r = $d*50;
						return "The Amount of Doller Donation Is= ".$r."_Rs<br> <br>";

				}
		
		public function pound()
		{
			$p=((($this->coin)*($this->num_coin))+(($this->notes)*($this->num_notes)));
			
			$r=$p*50*(1.622);
			
			return "The Amount of Pound Donation Is= ".$r."_Rs<br><br>";

		}
		public function rupees()
		{
			$rp=((($this->coin)*($this->num_coin))+(($this->notes)*($this->num_notes)));
			return "The Amount of rupees Donation Is= ".$rp."_Rs";
		}
	}


	
	

?>
