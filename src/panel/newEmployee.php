<?php 
require '../config.php';
$id = $_POST['empId'];
$name = $_POST['name'];
$dep = $_POST['dep'];
$desig = $_POST['desig'];

$sql = "INSERT INTO emp_details (Emp_ID, Emp_Name, Emp_Dep, Emp_Desig) VALUES ('$id', '$name', '$dep', '$desig')";
//$sql2 = "INSERT INTO emp_details (Emp_ID) VALUES ('$id')";
$result = $conn -> query($sql);
//$result2 = $conn -> query($sql2);

/*
if (($result === TRUE) AND ($result2 === TRUE)) {
   echo "New record created successfully";
   header("Location:viewEmployee.php");
}

 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

*/

if ($result === TRUE) {
	echo "<script> alert('Employee Added successfully');window.location = 'viewEmployee.php';</script>"; 
	

}

 else {
	 echo $conn -> error;
    echo "<script> alert('ERROR: Could not able to execute');window.location = 'viewEmployee.php';</script>" ;
	
}


mysqli_close($conn);

?>