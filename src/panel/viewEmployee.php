<!DOCTYPEhtml>
<html>
<head>
	<link rel = "stylesheet" href="../css/empDCss1.css"> 
	<link rel = "stylesheet" href="../css/empDCss2.css"> 
	<script src="../js/empDjs.js"></script>
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

<button class="open-button2" onclick="openForm()"  type = "submit" ><img src = "../images/addbtn.jpg"  style = "width:15px;height:15px;margin-right:4px;margin-left:0px;" ><b> New Employee</b> </button>
<div class="popup" id="myForm">
  <form method = "post" action="newEmployee.php" class="form-content">
    <h1>Add New Employee</h1>

    <label for="empId"><b>Employee ID</b></label>
    <input type="text" placeholder="Enter Employee ID" name="empId" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	
	 <label for="name"><b>Department</b></label>
    <input type="text" placeholder="Enter Department" name="dep" required>
	
	 <label for="name"><b>Designation</b></label>
    <input type="text" placeholder="Enter Designation" name="desig" required>

    <button type="submit" class="btn">Add Employee</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<div >
<table class = "tab1" >
<tr>
<th> EmployeeID </th>
<th> Name </th>
<th> Department </th>
<th> Designation </th>
<th> Start of work </th>
<th> Worked Days </th>
<th> EPF No </th>
<th> Edit </th>
<th> Delete </th>
<th> Edit Salary </th>
</tr>

<?php

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
			
			echo '<tr class = "green1" >';
			echo '<td>' . $EmployeeID . '</td>';
			echo '<td>' . $Name . '</td>';
			echo '<td>' . $Department . '</td>';
			echo '<td>' . $Designation . '</td>';
			echo '<td>' . $Start_of_work . '</td>';
			echo '<td>' . $No_Of_days_worked . '</td>';
			echo '<td>' . $no . '</td>';
			echo "<td><button class='a25' ><a class='a23' href = 'editEmployee.php?id=$EmployeeID' > Edit </a> </button></td>";
			echo "<td><button class='a26' ><a class='a23' href = 'deleteEmployee.php?id=$EmployeeID' > Delete </a> </button></td>";
			echo "<td><button class='a27' ><a class='a23' href = 'editSalary.php?id=$EmployeeID' > Update Salary </a> </button></td>";

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