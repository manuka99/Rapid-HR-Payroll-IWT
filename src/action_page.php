<?php 

require 'config.php';
$id = $_POST['empId'];
$name = $_POST['name'];
$dep = $_POST['dep'];
$desig = $_POST['desig'];

$sql = "insert into emp_details(Emp_ID, Emp_Name, Emp_Dep, Emp_Desig) VALUES ('$id', '$name', '$dep', '$desig')";
$result = $conn -> query($sql);

if ($result === TRUE) {
   echo "New record created successfully";
}

 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:index.php");

/*

$sql2 = "INSERT INTO emp_salary (Emp_ID) VALUES ('$id')";
$result2 = $conn -> query($sql2);



if (($result === TRUE) AND ($result2 === TRUE)) {
   echo "New record created successfully";
   header("Location:index.php");
}

 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

*/




?>