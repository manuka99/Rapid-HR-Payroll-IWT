<!DOCTYPE html>
<html>
	<head>
	<title>Employee Reports</title>
		
	<link rel = "stylesheet" href="css/empDCss1.css">
	<link rel = "stylesheet" href="css/empDCss2.css"> 
	<link rel = "stylesheet" href="css/empDCss3.css"> 
	<script src="js/empDjs.js"></script>
	<script src="js/empDjs2.js"></script>
	

	</head>
	<body >
<!--****************************  H  E  A  D  E  R  ****************************-->

		<div id="header"><img id="payroll" src="./images/logo.png"><h1 class="head" align="right">ABC Company (pvt) Lp</h1></div>
		
<!--****************************  H O M E - B A R ****************************-->	
		<div id="home">
			<div id="home1">
			<a href="index.html">Home</a>
			<a href="reg.html">Registration</a>
			<a href="panel/viewEmployee.php">Data Panel</a>
			<a href="about.html">About</a>
			</div>
			<div id="home2">
			<center>
			<input id="search" type="text" placeholder="Search...">
			<button id="s">Search</button>
			
			</center>
			</div>
			<div id="home3">
			<a class="b" href="cont.html">Contact Us</a>
			<a class="b" href="login.html">Logout</a>
			</div>
		</div>
<!--****************************  N  A  V  I  G  A  T  I  O  N  ****************************-->	
	
		<div id="navi">
			<ul class="navig2">
				<li><a class="nav" href="dept.html">Departments</a></li>
				<li><a class="nav1" href="index.php">Employee Details</a></li>
				<li><a class="nav" href="user.html">User Accounts</a></li>
				<li><a class="nav" href="sal.html">Salary Details</a></li>
				<li><a class="nav" href="dept.html">Reports</a></li>
			</ul>
		</div>
<!--****************************  C  O  N  T  E  N  T  ****************************-->
<?php
require 'config.php';

?> 
<div id = "cont">
<!--****************************  Employees  ****************************-->


<h1 id="empDe">Employee Details</h1>


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
			
			
			echo '<div style = "background-color: #e6f2ff;width:1100px;height: 600px;border: 10px solid #002080;padding: 20px;margin: 10px;position: relative;left: 300px;top: 20px">';
			echo '<img src = "images/user1.jpg" style = "height:150px; width:150px;position:relative;right:200px;top:0px">';
			echo '<div style = "position: relative;right: 0px;bottom: 180px" >';
			echo '<h1 style = "font-size:35px" >Employee ID: ' . $EmployeeID . '</h1>';
			echo '<h1 style = "font-size:26px" >Employee Name: ' . $Name . '</h1>';
			echo '<h1 style = "font-size:26px" >Department: ' . $Department . '</h1>';
			echo '<h1 style = "font-size:26px" >Designation: ' . $Designation . '</h1>';
			echo '<h1 style = "font-size:26px" >Start of work: ' . $Start_of_work . '</h1>';		
			echo '</div>';
			
			echo '<div style = "position: relative;left: 480px;bottom: 370px" >';
			echo '<h1 style = "font-size:26px" >No_Of_days_worked: ' . $No_Of_days_worked . '</h1>';
			echo '<h1 style = "font-size:26px" >Employee Provident Fund: ' . $no . '</h1>';
			echo '</div>';
			
			echo '<div style = "position: relative;left: 0px;bottom: 250px" >';
			echo '<h1>Employee Salary Details </h1>';
			echo '<h1 style = "font-size:26px" >Salary ID: ' . $salaryID . '</h1>';
			echo '<h1 style = "font-size:26px" >Date: ' . $date . '</h1>';
			echo '<h1 style = "font-size:26px" >Basic Salary: ' . $basic . '</h1>';
			echo '<h1 style = "font-size:26px" >Bonus: ' . $bonus . '</h1>';
			echo '<h1 style = "font-size:26px" >Travel Allowance: ' . $TA . '</h1>';
			echo '<h1 style = "font-size:26px" >Medical Allowance: ' . $MA . '</h1>';
			echo '</div>';
			
			echo '<div style = "position: relative;left: 630px;bottom: 525px" >';
			echo '<h1 style = "font-size:26px" >House Rent Allowance: ' . $HRA . '</h1>';
			echo '<h1 style = "font-size:26px" >Provident Tax: ' . $PT . '</h1>';
			echo '<h1 style = "font-size:26px" >Provident Fund: ' . $PF . '</h1>';
			echo '<h1 style = "font-size:26px" >Net Salary: ' . $net . '</h1>';		
			echo '</div>';
			
			echo '</div>';
	}
	
	}
	




$conn->close();
?>

</div>
<!--****************************  F  O  O  T  E  R  ****************************-->

		<div id="footer3">
			<footer>	
				<p>
					<a href="#"><img id="help" src="./images/hs.png"></a>
					<sup>&#169;</sup> ABC Company (PVT) Lp and contributors 2019
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
