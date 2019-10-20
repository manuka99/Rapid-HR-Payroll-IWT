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
			<a href="viewEmployee.php">Employee Records</a>
			<a class="b13" href="viewSalary.php">Salary Records</a>
			</div>
			<div id="home2">
			</div>
			<div id="home3">
			<a class="b" href="login.html">Logout</a>	
			<a class="b" href="cont.html">Contact Us</a>
			</div>
			</div>

<?php require '../config.php' ?>

<button class = "open-button2" type = "submit" ><img src = "../images/addbtn.jpg" style = "width:15px;height:15px;" ><b><a class = "a23" href = "genSalaryId.php">  Generate SalaryID</a></b></button>
<button class = "open-button2" type = "submit" ><img src = "../images/update.jpg" style = "width:15px;height:15px;" ><b><a class = "a23" href = "genNet.php">  Update Net Salary</a></b></button>


<div >
<table class = "tab1">
<tr>
<th> SalaryID </th>
<th> EmployeeID </th>
<th> Date </th>
<th> Basic Salary</th>
<th> Bonus</th>
<th> TA</th>
<th> MA</th>
<th> HRA </th>
<th> PT </th>
<th> PF </th>
<th> Net Salary </th>
<th> Edit </th>
<th> Delete </th>
</tr>

<?php

$recordId = $_GET['id'];
$sql = "select salary_id, Emp_ID, date, basic, bonus, TA, MA, HRA, PT, PF, net from emp_salary";
$result = $conn ->query($sql);


if($result -> num_rows > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{		
	
			$salaryID = $row['salary_id'];
			$EmployeeID = $row['Emp_ID'];
			$date = $row['date'];
			$basic = $row['basic'];
			$bonus = $row['bonus'];
			$TA = $row['TA'];
			$MA = $row['MA'];
			$HRA = $row['HRA'];
			$PT = $row['PT'];
			$PF = $row['PF'];
			$net = $row['net'];		
			
			if($EmployeeID == $recordId )
			{
			echo '<tr class = "green1" >';
			echo '<form method = "post" action="updateSalary.php" class="form-content">';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $salaryID . '" name = "field1" readonly></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $EmployeeID . '" name = "field2" readonly></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $date . '" name = "field3" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "' . $basic . '" name = "field4" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $bonus . '" name = "field5" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $TA . '" name = "field6" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $MA . '" name = "field7" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $HRA . '" name = "field8" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "' . $PT . '" name = "field9" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $PF . '" name = "field10" ></td>';
			echo '<td><input style="width: 100px;" type = "text" value = "'. $net . '" name = "field11" readonly></td>';
			echo '<td><input class = "a25" type = "submit" value = "Update" ></td> ';
			echo "<td><button class = 'a26' ><a class='a23' href = 'deleteSalary.php?id=$EmployeeID' > Delete </a></button></td>";
			echo '</form>';
			}
			
			else	{
			echo '<tr>';
			echo '<td>' . $salaryID . '</td>';
			echo '<td>' . $EmployeeID . '</td>';
			echo '<td>' . $date . '</td>';
			echo '<td>' . $basic . '</td>';
			echo '<td>' . $bonus . '</td>';
			echo '<td>' . $TA			. '</td>';
			echo '<td>' . $MA . '</td>';
			echo '<td>' . $HRA . '</td>';
			echo '<td>' . $PT . '</td>';
			echo '<td>' . $PF . '</td>';
			echo '<td>' . $net . '</td>';
			echo "<td><button class = 'a25' ><a class='a23' href = 'editSalary.php?id=$EmployeeID' > Edit </a> </button></td>";
			echo "<td><button class = 'a26' ><a class='a23' href = 'deleteSalary.php?id=$EmployeeID' > Delete </a> </button></td>";
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