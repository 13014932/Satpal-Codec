<!doctype html>
<html>

<body>
<style>
fieldset {
		background-color:#b3daff;
		height:300px;
		width:350px;
}
textarea{
	font-weight:bold;
	height:70px;
	width:270px;
	background-image: url("css_testt.jpg");
}
</style>

<fieldset >
<legend>Vehicle Detail</legend>
<form method="POST">
<input type="text" name="color" placeholder="enter vehicle color" required><br><br>
<input type="text" name="model" placeholder="enter vehicle model"><br><br>
<input type="text" name="wheels" placeholder="enter number of wheels "><br><br>
<select name="select_vehicle" required>
<option value="" selected>Select vehicle</option>
<option value="truck">Truck</option>
<option value="bus">Bus</option>
<option value="car">Car</option>
</select>
<br><br>
<input type="submit" name="Display" value="Display">
<a href="http://localhost/PHP_CODEC/Display_vehicle.php"><input type="button" value="REFRESH"></a><br>

</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'vehicle.php';
include 'truck.php';
include 'bus.php';
include 'car.php';

if(isset($_POST['Display'])){
	$option = isset($_POST['select_vehicle']) ? $_POST['select_vehicle'] : false;
	$obj;
	if( $option && $option=='truck'){
		$obj=new truck($_POST['color'],$_POST['model'],$_POST['wheels']);
	}	
	if($option && $option=='bus'){
	$obj=new bus($_POST['color'],$_POST['model'],$_POST['wheels']);
	}
	if($option && $option=='car'){
		$obj=new car($_POST['color'],$_POST['model'],$_POST['wheels']);
	}
	if(!empty($obj)){
		print "<textarea >".$obj->display()."</textarea>";
	}
}
}
?>


<?php // include 'inheritClass.php';
//$obj= (childs) new parents();
//$obj->display();

/*include 'marks.php';
include 'student.php';
			$marks=new marks(50,68,72,81);	
			$student=new student('satpal',123,$marks);
			$student->display();
 
		$array=array('hello' , 'satpal' , 'khatana gyfty');
		
		//$parts = implode(" ", $array);
		
		print str_word_count($array[2]).$array[2].$parts[12]; */
?>


</fieldset>
</body>
</html>