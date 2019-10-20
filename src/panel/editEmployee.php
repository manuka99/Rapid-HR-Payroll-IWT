<!DOCTYPEhtml>
<html>
<head>
	<link rel = "stylesheet" href="../css/empDCss1.css"> 
	<link rel = "stylesheet" href="../css/empDCss2.css"> 
	<title>DATA PANEL</title>

</head>

<body class = "body">

		<div id="header"><img id="payroll" src="../images/logo.png"><h1 class="head" align="right">Rapid Holdings (PVT) Ltd</h1></div>


<h1 style = "text-align:center; font-size: 40px;" > Online Payrol Management System - Data Update Panel</h1>

		<div id="home">
			<div id="home1">
			<a href="../index.php">Employee Details</a>
			<a class="b13" href="viewEmployee.php">Employee Records</a>
			<a href="viewSalary.php">Salary Records</a>
			</div>
			<div id="home2">
			</div>
			<div id="home3">
			<a class="b" href="login.html">Logout</a>	
			<a class="b" href="cont.html">Contact Us</a>
			</div>
		</div>



<?php require '../config.php' ?>

<div >
<table class = "tab1">
<tr>
<th> EmployeeID </th>
<th> Name </th>
<th> Department </th>
<th> Designation </th>
<th> Start of work </th>
<th> Worked Days </th>
<th> EPF No </th>
<th> Edit/Update </th>
<th> Delete </th>
</tr>

<?php

$recordId = $_GET['id'];
$sql = "select Emp_ID, Emp_Name, Emp_Dep, Emp_Desig, start_date, days_worked, epf_no from emp_details";
$result = $conn ->query($sql);


if($result -> num_rows > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{		
	
			$EmployeeID = $row['Emp_ID'];
			$Name = $row['Emp_Name'];
			$Department = $row['Emp_Dep'];
			$Designation = $row['Emp_Desig'];
			$Start_of_work = $row['start_date'];
			$No_Of_days_worked = $row['days_worked'];
			$no = $row['epf_no'];		
			
			if($EmployeeID == $recordId )
			{
			echo '<tr class = "green1" >';
			echo '<form method = "post" action="updateEmployee.php" class="form-content">';
			echo '<td><input style="width: 100px;" type = "text" value = '. $EmployeeID . ' name = "field1" readonly></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $Name . '" name = "field2" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $Department . '" name = "field3" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $Designation . '" name = "field4" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $Start_of_work . '" name = "field6" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $No_Of_days_worked . '" name = "field7" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $no . '" name = "field8" ></td>';
			echo '<td><input class="a25" type = "submit" value = "Update" ></td> ';
			echo "<td><button class='a26' ><a class='a23' href = 'deleteEmployee.php?id=$EmployeeID' > Delete </a></button></td>";
			echo '</form>';
			}
			
			else	{
			echo '<tr>';
			echo '<td>' . $EmployeeID . '</td>';
			echo '<td>' . $Name . '</td>';
			echo '<td>' . $Department . '</td>';
			echo '<td>' . $Designation . '</td>';
			echo '<td>' . $Start_of_work . '</td>';
			echo '<td>' . $No_Of_days_worked . '</td>';
			echo '<td>' . $no . '</td>';
			echo "<td><button class='a25' ><a class='a23' href = 'editEmployee.php?id=$EmployeeID' > Edit </a> </button></td>";
			echo "<td><button class='a26' ><a class='a23' href = 'deleteEmployee.php?id=$EmployeeID' > Delete </a> </button></td>";
			}
			
			echo '</tr>';
		
		
	}
	
	
	
}

else
echo "";

?>



</table>
</div>
<div id="footer2">
			<footer>	
				<p>
					<a href="#"><img id="help" src="../images/hs.png"></a>
					<sup>&#169;</sup> Rapid Holdings (PVT) Ltd and contributors 2019
					<a href="https://www.instagram.com"><img id="social" src="../images/ins.png"></a>
					<a href="https://lk.linkedin.com"><img id="social" src="../images/in.png"></a>
					<a href="https://www.google.com"><img id="social" src="../images/go.png"></a>
					<a href="https://twitter.com"><img id="social" src="../images/tw.png"></a>
					<a href="https://www.facebook.com"><img id="social" src="../images/fb.png"></a>
				</p>
			</footer>
		</div>

</body>
</html>