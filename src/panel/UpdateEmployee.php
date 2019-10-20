<?php
    include_once '../config.php';
?>

<?php

	$id = $_POST["field1"];
	$name = $_POST["field2"];
	$dep = $_POST["field3"];
	$desig = $_POST["field4"];
	$Start_of_work = $_POST["field6"];
	$No_Of_days_worked = $_POST["field7"];
	$no = $_POST["field8"];

	
	$sql = "UPDATE emp_details SET Emp_ID='$id', Emp_Name='$name', Emp_Desig='$desig', Emp_Dep='$dep', start_date = '$Start_of_work', days_worked = '$No_Of_days_worked', epf_no  = '$no' WHERE Emp_ID = '$id'";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Records Updated successfully');window.location = 'viewEmployee.php';</script>"; 
		} 
		
	else{
		echo $conn -> error;
		echo "<script> alert('ERROR: Could not able to execute');window.location = 'viewEmployee.php';</script>" ;
	}
	 

	 
	 

	//Close connection
	mysqli_close($conn);

?>