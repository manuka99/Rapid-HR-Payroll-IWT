<?php

require '../config.php';

$sql = "select Emp_ID from emp_salary";
$result = $conn -> query($sql);

if($result -> num_rows > 0)
{
		while($row = mysqli_fetch_assoc($result))
		{
			$empid = $row['Emp_ID'];	
			$sql2 = "update emp_salary set net = 0 where Emp_ID = $empid ";
			$result2 = $conn -> query($sql2);
			
		}
	
}

else
echo "";

if ($result2 === TRUE) {
	echo "<script> alert('Net Salary Reseted successfully');window.location = 'viewSalary.php';</script>"; 
	

}

 else {
	 echo $conn -> error;
    echo "<script> alert('ERROR: Could not able to execute');window.location = 'viewSalary.php';</script>" ;
	
}



mysqli_close($conn);

?>