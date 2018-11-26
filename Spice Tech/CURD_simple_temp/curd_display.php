<!doctype HTML>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<body>
<style>
table, th, td {
	width : 50%;
    border: 1px solid black;
    padding:collapse;
}
.c_width {
	
	
	 column-width: 500px;
	
}
</style>

<?php

$name = "jaggu";

?>
<a href="curd_form.php">1 page</a>
<?php
include 'db_control_simple.php';

$sqlpf = "SELECT * FROM form_test  ORDER BY id DESC ";

echo "<table ><tr><th>First Name:</th><th>Last Name:</th><th>  E-Mail</th><th> Mobile-no.</th><th>qunatity</th><th >Created On:-</th><th>id</th><th>action</th></tr>";
$result = $conn->query($sqlpf);

if ($result->num_rows > 0) {
    
	while ($row = $result->fetch_assoc()) {
		
		echo '<tr>';
		
		echo '<td>'.$row['firstname'].'</td>';
		echo '<td>'.$row['lastname'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['mobile'].'</td>';
		echo '<td>'.$row['qunatity'].'</td> ';
		echo '<td >'.$row['create_time'].'</td> ';
		echo '<td>'.$row['id'].'</td>';
		
		echo '<td>  <a  href="del_record.php ? id='.$row['id'].'">
		
		
		<button   class="btn btn-default btn-sm ">
		<span class="glyphicon glyphicon-trash remove "></span>Trash</button></a></td>';
		//-------------------------------------------javscript alert delete---------------------------------------------------------------------------//
		
		echo '<td> <a  onclick=javascript:hello() ? id='.$row['id']. '>
		<button    
		class="btn btn-default btn-sm">
		<span class="glyphicon glyphicon-trash"></span>Alert_Del</button></a></td>';
		
	
	}
  
} 
  echo '</tr></table>';
$conn->close();

?>

<p id="like" class="em em---1"></p> 
<a  href="del_temp.php >sadasdas</a>




<i class="em em---1"></i>
<a href="curd_form.php" >1page</a>
<a  href="del_temp2.php" >sadasdas</a>
<script>

function hello() {
	
	
	alert ('You Press "Alter_Del" BUTTON');
	
}

</script>
<!--
if (isset($_POST['delname'] == "")
{
 echo "<script type='text/javascript'> alert('Please Enter First name to DELETE');</script>";	
}
else
{
   $name = $_POST['delname'];
	
	$sqld = "DELETE  FROM form_test WHERE firstname OR lastname		 = '".$name."'";
}
if ($conn->query($sqld) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
 */ -->
</body>
</html>