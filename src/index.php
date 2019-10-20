<!DOCTYPE html>
<html>
	<head>
	<title>Employee Details</title>
		
	<link rel = "stylesheet" href="css/empDCss1.css">
	<link rel = "stylesheet" href="css/empDCss2.css"> 

	<script src="js/empDjs.js"></script>

	

	</head>
	<body>
<!--****************************  H  E  A  D  E  R  ****************************-->

		<div id="header"><img id="payroll" src="images/logo.png"><h1 class="head" align="right">Rapid Holdings (PVT) Ltd</h1></div>
		
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

			
			</center>
			</div>
			<div id="home3">
			<a class="b" href="login.html">Logout</a>
			<a class="b" href="cont.html">Contact Us</a>
			
			</div>
		</div>
<!--****************************  N  A  V  I  G  A  T  I  O  N  ****************************-->	
	
		<div id="navi">
			<ul class="navig">
				<li><a class="nav" href="dept.html">Departments</a></li>
				<li><a class="nav1" href="">Employee Details</a></li>
				<li><a class="nav" href="user.html">User Accounts</a></li>
				<li><a class="nav" href="sal.html">Salary Details</a></li>
				<li><a class="nav" href="dept.html">Reports</a></li>
			</ul>
		</div>
<!--****************************  C  O  N  T  E  N  T  ****************************-->

<?php
require 'config.php';

?> 


<!--**************************** New Employee Popup ****************************-->

<button class="open-button" onclick="openForm()">Add New Employee</button>

<div class="popup" id="myForm">
  <form method = "post" action="action_page.php" class="form-content">
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

<!--****************************  Employees  ****************************-->


<h1 id="empDe">Employee Details</h1>

<input type="text" id="myInput"  onkeyup="myFunction()"  placeholder="Search by Name and Employee Id.." title="Type in a name">
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search by Department.." title="Type in a name">
<input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search by Designation.." title="Type in a name">

<ul id="myUL">

<?php
$sql = "SELECT Emp_ID, Emp_Name, Emp_Dep, Emp_Desig FROM emp_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$id = $row["Emp_ID"];
	$name = $row["Emp_Name"];
	$dep = $row["Emp_Dep"];
	$des = $row["Emp_Desig"];
	
	echo '<li>';
	echo "<button class=\"btn1\" type='submit'><a href='panel/editEmployee.php?id=$id'>" . '<img src="images/edit.jpg" alt="Edit" height="16px" width="16px">' . "</a></button>";
	echo "<button class=\"btn1\" type='submit'><a href='deleteData.php?id=$id'>" . '<img src="images/delete.jpg" alt="Delete" height="16px" width="16px">' . "</a></button>";
	echo '<img id="img1" src="images/user1.jpg">';
	echo '<h2>';
	echo $row["Emp_Name"];
	echo '<br>EmpId:' .$row["Emp_ID"];
	echo '</h2>';
	echo '<h3> Department:' .$row["Emp_Dep"]. '</h3>';
	echo '<h4>Designation:' .$row["Emp_Desig"]. '</h4>';
	echo "<button class=\"btn1\" type='submit'><a class = \"a24\" href='empdata.php?id=$id'><b>More</b></a></button>";

	
/*	echo '<div class="dropdown"> ';
    echo '<button class="dropbtn"><b>View More </b><img src="images/down.jpg" alt="Down" height="16px" width="16px"> <i class="fa fa-caret-down"></i> </button>';
	echo '<div class="dropdown-content">';
	echo '<p>Salary:' .$id. '</p>';
	echo '<p><?php echo $id ?>Home</p>';
	echo '<p><?php echo $id ?>Home</p>';
	echo "</div>";
	echo "</div>";
	*/
	echo "<br>";
	

	echo '</li>';
	

  


	}

}

else {
	
    // echo "0 results";
}

$conn->close();

?>
</ul>

<!--****************************  F  O  O  T  E  R  ****************************-->

		<div id="footer">
			<footer>	
				<p>
					<a href="#"><img id="help" src="./images/hs.png"></a>
					<sup>&#169;</sup> Rapid Holdings (PVT) Ltd and contributors 2019
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
