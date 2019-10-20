<!DOCTYPE html>
<html>
<head>
		<title>Employee Details</title>

	<link rel="stylesheet" type="text/css" href="css/empDCss3.css">

	
 	<link rel="icon" href="./images/icon.png">
    

</head>
<body>
<?php require 'config.php'; ?>
<!--****************************  H  E  A  D  E  R  ****************************-->

		<div id="header"><img id="payroll" src="./images/logo.png"><h1 class="head" align="right">Rapid Holdings (PVT) Ltd</h1></div>
		
<!--****************************  H O M E - B A R ****************************-->	
		
		<div id="home">
			<div id="home1">
				<a href="Homepage.html">Home</a>
				<a href="Registration.html">Registration</a>
				<a href="panel/viewEmployee.php">Data Panel</a>
				<a href="about.html">About</a>
			</div>
			<div id="home2">
				<center>

				</center>
			</div>
			<div id="home3">
			<a class="b" href="cont.html">Contact Us</a>
			<a class="b" href="login.html">Logout</a>
			</div>
		</div>
<!--****************************  N  A  V  I  G  A  T  I  O  N  ****************************-->	

	
		<div id="navi">
			<div id="navigat">
			<ul class="navig">
				<li><a class="nav" href="Departments.html">Departments</a></li>
				<li><a class="nav1" href="index.php">Employee Details</a></li>
				<li><a class="nav" href="UserProfile.html">User Accounts</a></li>
				<li><a class="nav" href="EmployeeSalaryDetails.html">Salary Details</a></li>
				<li><a class="nav" href="EmployeeReports.html">Reports</a></li>
			</ul>
			</div>
		</div>

<!-------------  content ---->
<?php
$recordId = $_GET['id'];

$sql = "select Emp_ID, Emp_Name, Emp_Dep, Emp_Desig, start_date, days_worked, epf_no from emp_details where Emp_ID = $recordId";
$sql2 = "select salary_id, Emp_ID, date, basic, bonus, TA, MA, HRA, PT, PF, net from emp_salary where Emp_ID = $recordId";
$result = $conn ->query($sql);
$result2 = $conn ->query($sql2);

	while($row2 = mysqli_fetch_assoc($result2))		{
		
			$salaryID = $row2['salary_id'];
			$EmployeeID = $row2['Emp_ID'];
			$date = $row2['date'];
			$basic = $row2['basic'];
			$bonus = $row2['bonus'];
			$TA = $row2['TA'];
			$MA = $row2['MA'];
			$HRA = $row2['HRA'];
			$PT = $row2['PT'];
			$PF = $row2['PF'];
			$net = $row2['net'];		
			
			
			while($row = mysqli_fetch_assoc($result))	{
			
			$EmployeeID = $row['Emp_ID'];
			$Name = $row['Emp_Name'];
			$Department = $row['Emp_Dep'];
			$Designation = $row['Emp_Desig'];
			$Start_of_work = $row['start_date'];
			$No_Of_days_worked = $row['days_worked'];
			$no = $row['epf_no'];
	}
	
	}
	




$conn->close();
?>
		
	<h1 align="center">EMPLOYEE DETAILS</h1><br/><br/>
	

	<table class = "empbox" border="black" align="center">
	
	<tr>
	
	<td width="300px" ><img src="images/user1.jpg" style = "width:160px;height:160px" ></td>

	<td width="300px" align="left" valign="top">
					
					<label><p class = "p12" >Employee ID: <?php echo $EmployeeID; ?> </p></label>
					
					<label><p class = "p12" >Employee Name: <?php echo $Name; ?> </p></label>
					
					<label><p class = "p12" >Designation: <?php echo $Designation; ?>  </p></label>
					
					<label><p class = "p12" >Department: <?php echo $Department; ?>  </p></label></td>
	
	<td width="400px" align="left" valign="top">
					
					<label><p class = "p12" >Start of work: <?php echo $Start_of_work; ?> </p></label>
					
					<label><p class = "p12" >No Of days worked: <?php echo $No_Of_days_worked; ?> </p></label>
					
					<label><p class = "p12" >Employee Provident Fund NO: <?php echo $no; ?>  </p></label>
					

	

	<tr><td align="left" valign="top"><h3>Salary ID: <?php echo $salaryID; ?> </h3></td>
	<td colspan = "2" align="left" valign="top"><h3>Salary Date: <?php echo $date; ?> </h3></td></tr>	
	
	<tr>
	<td align="left" valign="top"><h3>Description</h3></td>
	<td align="left" valign="top"><h3>Earnings</h3></td>
	<td align="left" valign="top"><h3>Deductions</h3></td>
	</tr>
	
	<tr>	
	<td  align="left" valign="top">
					<label><p class = "p12" >Basic Salary: </p></label>
					
					<label><p class = "p12" >Bonus: </p></label>
					
					<label><p class = "p12" >Travel Allowance:  </p></label>
					
					<label><p class = "p12" >Medical Allowance: </p></label>
					
					<label><p class = "p12" >House Rent Allowance: </p></label>
					
					<label><p class = "p12" >Profesional Tax: </p></label>
										
					<label><p class = "p12" >Provident Fund: </p></label></td>
											  
	<td  align="left" valign="top">
					<label><p class = "p12" > Rs. <?php echo $basic; ?> </p></label>
					
					<label><p class = "p12" > Rs. <?php echo $bonus; ?>  </p></label>
					
					<label><p class = "p12" > Rs. <?php echo $TA; ?> </p></label>
					
					<label><p class = "p12" > Rs. <?php echo $MA; ?> </p></label>
					
					<label><p class = "p12" > Rs. <?php echo $HRA; ?> </p></label>
					
					<label><p class = "p12" > &nbsp;&nbsp;&nbsp; - </p></label>
										
					<label><p class = "p12" > &nbsp;&nbsp;&nbsp; - </p></label></td>
	<td  align="left" valign="top">
					<label><p class = "p12" > &nbsp;&nbsp;&nbsp; - </p></label>
					
					<label><p class = "p12" > &nbsp;&nbsp;&nbsp; - </p></label>
					
					<label><p class = "p12" > &nbsp;&nbsp;&nbsp; - </p></label>
					
					<label><p class = "p12" > &nbsp;&nbsp;&nbsp; - </p></label>
					
					<label><p class = "p12" > &nbsp;&nbsp;&nbsp; - </p></label>
					
					<label><p class = "p12" > Rs. <?php echo $PT; ?>  </p></label>
										
					<label><p class = "p12" > Rs. <?php echo $PF; ?> </p></label></td>
	</tr>
	
	
	<tr>
	<td colspan = "3" align="left" valign="top"><h2  >Net Salary:  <?php echo '<div class = "p12" style = "text-align:right;float:right;margin-right:20px" >Rs. ' . $net . '</div>'; ?></h2></td>


	</tr>
	</table>

<!--****************************  F  O  O  T  E  R  ****************************-->
		
		<div id="footer">
			<footer>
				<p>
					<a href="HelpAndSupport.html"><img id="help" src="./images/hs.png"></a>
					<sup>&#169;</sup>Rapid Holdings (PVT) Ltd and contributors 2019
					<a href="https://www.instagram.com"><img id="social" src="./images/ins.png"></a>
					<a href="https://lk.linkedin.com"><img id="social" src="./images/in.png"></a>
					<a href="https://www.google.com"><img id="social" src="./images/go.png"></a>
					<a href="https://twitter.com"><img id="social" src="./images/tw.png"></a>
					<a href="https://www.facebook.com"><img id="social" src="./images/fb.png"></a>
				</p>
			</footer>
		</div>
		
	</body>
</html>
	
	
	
	