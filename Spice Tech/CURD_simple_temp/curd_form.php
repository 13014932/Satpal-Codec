<!doctype HTML>
<html>
<body>
<style>
.imghw {
	
	width : 100px;
}
* {box-sizing: border-box;}

.container {
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
</style>
<?php


?>
<form method="post"   >
First name <input type="text" name="fname" value="satpal"><br><br>
Last name <input type="text" name="lname" value="khatana"><br><br>
E-mail <input type="text" name="email" value="ersatpal127@gmail.com"><br><br>
Mobile number <input type="number" name="mnumber" value=8684846301><br><br>

<input type="submit" value="submit" name="s_submit">
</form>

<a href="curd_display.php" target="_BLANK ">2 page</a>
<?php
include 'db_control_simple.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$red_clay=isset($_POST['fname']) ? $_POST['fname'] : '';
		$yamuna=isset($_POST['lname']) ? $_POST['lname'] : '';
		$reti=isset($_POST['email']) ? $_POST['email'] : '';
		$rori=isset($_POST['mnumber']) ? $_POST['mnumber'] : '';
		$qunatity=isset($_POST['qunatity']) ? $_POST['qunatity'] : 12;
		
		if($red_clay == '' && $yamuna == '' &&  $reti == '' &&  $rori == '' ){
			   echo "<script type='text/javascript'> alert('Please Select At least One product');</script>";
		die;
		}
		
$sql_spice = "INSERT INTO curd_simple (firstname, lastname, email, mobile, qunatity)

VALUES ('".$red_clay."','".$yamuna."','".$reti."','".$rori."','".$qunatity."')";

if ($conn->query($sql_spice) === TRUE) {
  // echo "<script type='text/javascript'> alert('Record INSERTED Sucessfully');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
$conn->close();



?>
<!--
<div class="container">
<input type="checkbox" name="red_clay" value="red_bricks" id="myCheckbox1" /><label for="myCheckbox1">
<img  class="image" src="img\2015-11-17-14-29-59-561.jpg" /></label><br><br>
  <div class="overlay">Red Clay Bricks <a href="#">read more</a></div>
</div>

<!--

 yamuna  <input type="checkbox" name="yamuna" value="yamuna"><br><br> 
 reti <input type="checkbox" name="reti" value="reti"><br><br> 
 rori <input type="checkbox" name="rori" value="rori"><br><br> 
red brick qunatity<input type="number" name="qunatity" value=1><br><br>
 -->
</body>
</html>