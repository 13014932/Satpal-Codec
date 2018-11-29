<!doctype html>
<html>
<body>



<?php

		class school {

		public $student=array(23,21,12,32,5,2,8,54,11,27);

	public static function sorts($a){
		
		 sort($a);
		$s_length=count($a);
		
		for($i=0;$i < $s_length; $i++){
				echo $a[$i]." , ";
		}
			}

		}
$obj=new school;
$c=$obj->student;
$obj->sorts($c);

//print $d=implode(" ",$c);
		
		
?>



</body>
</html>