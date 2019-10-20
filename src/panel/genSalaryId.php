<?php

require '../config.php';

$sql = "select Emp_ID from emp_details where Emp_ID not in ( select Emp_ID from emp_salary)";
$result = $conn -> query($sql);


if($result -> num_rows > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{		
			$EmployeeID = $row['Emp_ID'];
			$sql2 = "insert into emp_salary(Emp_ID) values('$EmployeeID')";
			$result3 = $conn -> query($sql2);

			
		
	}
	

	
	
}

/*
else
echo "". $result -> error;


	if ($result3 === TRUE) {
		echo "<script> alert('SalaryID's Generated successfully');window.location = 'viewSalary.php';</script>"; 

	}

	else {
		echo "<script> alert('ERROR: Could not able to execute');window.location = 'viewSalary.php';</script>" ;
	
	}

*/

echo "<script> alert('SalaryID's Generated successfully');window.location = 'viewSalary.php';</script>"; 
header("location:viewSalary.php");

mysqli_close($conn);


?>