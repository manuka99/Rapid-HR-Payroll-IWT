<?php
    include_once '../config.php';
?>

<?php
	$recordId = $_GET['id'];	
	$sql = "DELETE FROM emp_salary WHERE Emp_ID = '$recordId'";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Salary Details Deleted successfully');window.location = 'viewSalary.php';</script>";
		
	} 
	else{
		echo $conn -> error;
		echo "<script> alert('ERROR: Could not able to execute');window.location = 'viewSalary.php';</script>" ;
	}
	 
	
	//Close connection
	mysqli_close($conn);

?>