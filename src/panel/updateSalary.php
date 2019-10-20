<?php
    include_once '../config.php';
?>

<?php

	$salaryID = $_POST["field1"];
	$EmployeeID = $_POST["field2"];
	$date = $_POST["field3"];
	$basic = $_POST["field4"];
	$bonus = $_POST["field5"];
	$TA = $_POST["field6"];
	$MA = $_POST["field7"];
	$HRA = $_POST["field8"];
	$PT = $_POST["field9"];
	$PF = $_POST["field10"];

	
	$sql = "UPDATE emp_salary SET date='$date', basic='$basic', bonus = '$bonus', TA = '$TA', MA  = '$MA', HRA = '$HRA', PT = '$PT', PF  = '$PF' WHERE salary_id = '$salaryID' ";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Salary Updated successfully');window.location = 'viewSalary.php';</script>";
	} 
	else{
		echo $conn -> error;
		echo "<script> alert('ERROR: Could not able to execute');window.location = 'viewSalary.php';</script>" ;
	}
	 

	//Close connection
	mysqli_close($conn);

?>