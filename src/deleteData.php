<?php
    include_once 'config.php';
?>

<?php
	$recordId = $_GET['id'];
	$sql = "DELETE FROM emp_details WHERE Emp_ID = '$recordId' ";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:index.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	header("Location:index.php");
	//Close connection
	mysqli_close($conn);

?>