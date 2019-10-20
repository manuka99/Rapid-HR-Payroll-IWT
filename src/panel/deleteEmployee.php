<?php
    include_once '../config.php';
?>

<?php
	$recordId = $_GET['id'];	
	$sql = "DELETE FROM emp_details WHERE Emp_ID = '$recordId'";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Employee Details Deleted successfully');window.location = 'viewEmployee.php';</script>";
		
	} 
	else{
		echo $conn -> error;
		echo "<script> alert('ERROR: Could not able to execute');window.location = 'viewEmployee.php';</script>" ;
	}
	 
	 
	//Close connection
	mysqli_close($conn);

?>