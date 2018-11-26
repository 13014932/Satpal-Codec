
 <?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"]  )){
    // Include config file
    require_once 'db_control_simple.php';
    
    // Prepare a delete statement
    $sql = "DELETE FROM form_test WHERE id= ?"; 
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: curd_display.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
		.hide {
			
			display: none;
			
		}
    </style>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body onload="hello()">
<div class="hide">
<?php
include 'db_control_simple.php';
	$ids= trim($_GET["id"]); 
$sqlpf = "SELECT * FROM form_test  WHERE id= $ids ";

echo "<table   ><tr><th>First Name:</th><th>Last Name:</th><th>  E-Mail</th><th> Mobile-no.</th><th>qunatity</th><th >Created On:-</th><th>id</th><th>action</th></tr>";
$result = $conn->query($sqlpf);
if ($result->num_rows > 0) {
    
	while ($row = $result->fetch_assoc()) {
		
		echo '<tr>';
		
		echo '<td id="satpal" >'.$row['firstname'].'</td>';
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="hide"	>
                        <div class="alert alert-danger fade in">
                          ID:-  <input type="text" name="id" value="<?php echo trim($_GET["id"]); ?>" readonly />
                            
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
							<input type="hidden" onclick="hello()" value="click">
                                <input  type="submit" id="submit" value="Yes" class="btn btn-danger">
                                <a href="curd_display.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
	</div>
	<script>
	
	
	function hello()
	{
		//var a=<?php echo trim($_GET["id"]); ?>;
		// var a =document.getElementById("satpal").innerHTML;
		 //	alert(a);
		 var a=confirm("You Went To delete the Record");
		 
		 if(a){
		 document.getElementById("submit").click();
		 alert('Record DELETE Sucessfully');
		 }
		 else{
			 window.location.href='curd_display.php';
		 }
	}



	</script>	
</body>
</html>