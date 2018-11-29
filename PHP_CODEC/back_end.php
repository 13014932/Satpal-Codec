
<?php 

	class display{
		
	 public function print_array($array1){
		 
		for($i=0;$i<sizeof($array1);$i++){
		
		 $array1[$i];
				
		}	
		 	
	 }
	 
 }
 class calculator {
	 
	 public $firstnum;
	 public $lastnum;
	 public function __construct($num1,$num2){
		 
				$this->lastnum=$num2;
				$this->firstnum=$num1;
	 }
	 
	 public function checkNum($number) {
  if($number<=0) {
    throw new Exception("Value must be grather than zero");
  }
  return true;
}
			public function sum(){
				  $sum1=$this->firstnum;
				  $sum2=$this->lastnum;
				  $sumf=$sum1+$sum2;
				  $b="is the jbfaf";
				//  $sumf=$firstnum+$lastnum;
				  return $sumf;				
			}
			public function sub(){
				  $sub1=$this->firstnum;
				  $sub2=$this->lastnum;
				  $subf=$sub1-$sub2;
				  return $subf;
				
							}
			public function mul(){
				  $mul1=$this->firstnum;
				  $mul2=$this->lastnum;
				  $mulf=$mul1*$mul2;
				  return $mulf;			
			}
		public function div(){
			$div1=$this->firstnum;
			$div2=$this->lastnum;
			try {
				$this->checkNum($div2);
				$divf=$div1/$div2;
			}catch(Exception $e){
				$divf= $e->getMessage();
			}
						
			return $divf;
				
}		
		
	public function modulas(){
		$modu1=$this->firstnum;
		$modu2=$this->lastnum;
		if(empty($modu2)){
		 function checkNum($modu2){
			if($modu2<1){
				throw new Exception("Value mus be 1 or above");
			}
			return true;
		}
		try {
			checkNum(2);
			echo 'The Value of DIVISOR Must be Larger Then "0" ';
		}
		catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
		}
		else{
		$divf=$modu1%$modu2;
		return $divf;
		}
	}
	 
	 public function table(){
		 $tab1=$this->firstnum;
		// $tab2=$this->lastnum;
		 for($i=0;$i<10;$i++){
		 $tabf[$i]=$tab1*($i+1);
		 }
		  return $tabf;
	 }
	 public function table_of(){
		 $tab3=$this->firstnum;
		 //$tab2=$this->lastnum;
		 $tab4=$tab3*10;
		 return $tab4;
	 } 
	 public function rev(){
			$digit=$this->firstnum;
		 $temp1=0;
		while($digit !=0){
			$temp1=$temp1*10;
			$temp1=$temp1+$digit%10;
			$digit=intval($digit/10);
		}
		return $temp1;
 }
	public function revstr(){
		$rev1=$this->firstnum;
	$rev2 = strrev($rev1);
	$strlen= " , The Length of String is=".strlen($rev1);
	$str_word_count = " , The WORD COUNT= ".str_word_count($rev1);
	return $rev2.$strlen.$str_word_count;
		
 }
 
 } 
	 
 ?>