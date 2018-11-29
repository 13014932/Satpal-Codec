<!DOCTYPE HTML>
<html>
<body>
<style>
fieldset{
	
        background-color: #07a091;
        width: 270px;
		height:400px;
		float: center;	
    }
	textarea{
		width: 270px;
       height: 80px;
		font-weight:bold;
		background-image: url("css_testt.jpg");	
	}
	.a{		
		background-color: coral;
	 	
	}
	.b{
		background-color: #4CAF50;
	}
</style>
<fieldset >
<legend>Calcultor</legend>
<form method="POST">
<input type="text" name="fnumber" id="textfield1"   value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo  $_POST['fnumber'] ; } ?>" placeholder="enter first number"><br><br>
<input type="text" name="snumber" id="textfield2" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo  $_POST['snumber'] ; } ?>" placeholder="enter secound number"><br><br>
 <input type="submit"   name="ADDITION" value="ADDITION">
<input type="submit" name="SUBTRACTION" value="SUBTRACTION"><br><br>
<input type="submit" name="MULTIPLY" value="MULTIPLY">
<input type="submit" name="DIVIDE" value="DIVIDE">
<input type="submit" name="MODULAS" value="MODULAS"><br><br>
<input type="submit" name="TABLE" value="TABLE">
<input type="submit" name="TABLE_OF" value="TABLE_OF">
<input type="submit" name="REVERSE" value="REVERSE_NUM"><br><br>
<input type="submit" name="REVERSESTR" value="REVERSE_STR">
<script type="text/javascript">
   function ClearFields() {
     document.getElementById("textfield1").value = "";
     document.getElementById("textfield2").value = "";
}
</script>
<input type="button" name="button" class="a" onclick= "ClearFields();" value="RESET"> <a href="http://localhost/PHP_CODEC/WITH_FORM.php"><input type="button" class="b" value="REFRESH"></a>

<br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
include 'back_end.php';
$objcal = new calculator($_POST['fnumber'],$_POST['snumber']);

if(isset($_POST['ADDITION'])){
	
	$ans=$objcal->sum();
	$a = ($_POST['ADDITION']);	
	
	}
if(isset($_POST['SUBTRACTION'])){
	
	$ans=$objcal->sub();
	$a = ($_POST['SUBTRACTION']);	
}
if(isset($_POST['MULTIPLY'])){
	$ans=$objcal->mul();	
	$a = ($_POST['MULTIPLY']);
}
if(isset($_POST['DIVIDE'])){
	$ans=$objcal->div();
	$a = ($_POST['DIVIDE']);
	
}
if(isset($_POST['MODULAS'])){
	$ans=$objcal->modulas();
	$a = ($_POST['MODULAS']);
	
	//$ansm= "fafasf"; display the method like "the modulas of first and secound number is = ans"
}
if(isset($_POST['TABLE'])){
	$ans=implode(",",$objcal->table());
	$a = ($_POST['TABLE']);
}
if(isset($_POST['TABLE_OF'])){
	$ans=$objcal->table_of();
	$a = ($_POST['TABLE_OF']);
}
if(isset($_POST['REVERSE'])){
	$ans=$objcal->rev();
	$a = ($_POST['REVERSE']);
}
if(isset($_POST['REVERSESTR'])){
	$ans=$objcal->revstr();
	$a = ($_POST['REVERSESTR']);
}
}
?>

<textarea ><?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
	echo "The -".$a."-"." OF ".$_POST['fnumber'].",".$_POST['snumber']." IS == ".$ans; 
	} ?></textarea>
	
</fieldset>






</body>
</html>