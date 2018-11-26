<?php


require('db_control.php');


if(isset($_GET['id']))
{
     $sql = "DELETE FROM form_test WHERE id=".$_GET['id'];
     $mysqli->query($sql);
	 echo 'Deleted successfully.';
}


?>