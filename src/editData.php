<!DOCTYPE html>
<html>
	<head>
	<title>Employee Reports</title>
		
	<link rel="stylesheet" type="text/css" href="css/empDCss1.css">
	<link rel = "stylesheet" href="css/empDCss2.css"> 
	<script src="js/empDjs.js"></script>
	
	

	</head>
	<body>
<!--****************************  H  E  A  D  E  R  ****************************-->

		<div id="header"><img id="payroll" src="./images/logo.png"><h1 class="head" align="right">ABC Company (pvt) Ltd</h1></div>
		
<!--****************************  H O M E - B A R ****************************-->	
		
		<div id="home">
			<div id="home1">
			<a href="index.html">Home</a>
			<a href="reg.html">Registration</a>
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
			<ul class="navig">
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

<?php
$recordId = $_GET['id'];

$sql = "SELECT * FROM emp_details where Emp_ID = $recordId";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$dep = $row["Emp_Dep"];
		$name = $row["Emp_Name"];
		$desig = $row["Emp_Desig"];
		$id = $row["Emp_ID"];
        }
}

?>

<!--**************************** New Employee Popup ****************************-->

<div class="open-button" class="popup">
  <form method = "post" action="updateData.php" class="form-content">
   <h1> Edit Employee </h1>

    <label for="empId"><b>Employee ID </b></label> 
    <input type="text" placeholder="Enter Employee ID" name="field1" value= <?php echo $id ?> readonly />

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="field2" value= <?php echo $name ?> />
	
	 <label for="name"><b>Department</b></label>
    <input type="text" placeholder="Enter Department" name="field3" value= <?php echo $dep ?> />
	
	 <label for="name"><b>Designation</b></label>
    <input type="text" placeholder="Enter Designation" name="field4" value= <?php echo $desig ?> />

    <button type="submit" class="btn">Update Employee</button>
    <button type="button" class="btn cancel"><a class = "a23" href="empdetails.php">Close </a></button>
  </form>
</div>

<!--****************************  Employees  ****************************-->


<h1 id="empDe">Employee Details</h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Name and Employee Id.." title="Type in a name">
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
	echo '<li>';
	echo '<img id="img1" src="images/user1.jpg">';
	echo '<h2>' .$row["Emp_Name"];
	echo '<br>EmpId:' .$row["Emp_ID"]. '</h2>';
	echo '<h3> Department:' .$row["Emp_Dep"]. '</h3>';
	echo '<h4>Designation:' .$row["Emp_Desig"]. '</h4>';
	//echo "<button type='submit'><a href = 'editData.php?id = $id' >Edit </a> </button >";
	//echo "<button type='submit'><a href = 'deleteData.php?id = $id' >Delete </a> </button >";
	echo "<button type='submit'><a href='editData.php?id=$id'>Edit</a></button>";
	echo "<button type='submit'><a href='deleteData.php?id=$id'>Delete</a></button>";
	echo '</li>';
	

  

	//echo "<td><button><a href='editReport.php?id=$id' >Edit</a> </button></td>";
	//echo "<td><button><a href='deleteReport.php?id=$id' >Delete</a> </button></td></tr>";
	}

}

else {
	
    // echo "0 results";
}

$conn->close();

?>


<li><img id="img1" src="images/user1.jpg"><h2>Manuka Yasas<br>EmpId:Emp199356445</h2><h3>Department:IT</h3><h4>Designation:Director</h4><p id = "para1"> </p><button id="btn1" onclick="loadData('btn1')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Jayaprabha Chamodya<br>EmpId:Emp199964645</h2><h3>Department:IT</h3><h4>Designation:Manager</h4><p id = "para2"> </p><button id="btn2" onclick="loadData('btn2')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Samadhi Perera<br>EmpId:Emp199321545</h2><h3>Department:IT</h3><h4>Designation:Developer</h4><p id = "para3"> </p><button id="btn3" onclick="loadData('btn3')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Thisun Saram<br>EmpId:Emp189312645</h2><h3>Department:Accounts</h3><h4>Designation:Director</h4><p id = "para4"> </p><button id="btn4" onclick="loadData('btn4')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Ramesh Udawalawe<br>EmpId:Emp176512645</h2><h3>Department:Accounts</h3><h4>Designation:Manager</h4><p id = "para5"> </p><button id="btn5" onclick="loadData('btn5')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Sagari Perera<br>EmpId:Emp199312345</h2><h3>Department:Accounts</h3><h4>Designation:Secretary</h4><p id = "para6"> </p><button id="btn6" onclick="loadData('btn6')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Maheshika Santha<br>EmpId:Emp199323645</h2><h3>Department:Audit</h3><h4>Designation:Manager</h4><p id = "para7"> </p><button id="btn7" onclick="loadData('btn7')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>John De Silva<br>EmpId:Emp199882645</h2><h3>Department:Audit</h3><h4>Designation:Accountant</h4><p id = "para8"> </p><button id="btn8" onclick="loadData('btn8')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Kumath Peris<br>EmpId:Emp199333645</h2><h3>Department:Audit</h3><h4>Designation:Accountant</h4><p id = "para9"> </p><button id="btn9" onclick="loadData('btn9')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Aksha Kumara<br>EmpId:Emp195356445</h2><h3>Department:IT</h3><h4>Designation:Director</h4><p id = "para10"> </p><button id="btn10" onclick="loadData('btn10')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Dimuthu Rajapaksha<br>EmpId:Emp195964645</h2><h3>Department:IT</h3><h4>Designation:Manager</h4><p id = "para11"> </p><button id="btn11" onclick="loadData('btn11')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Sanjeewa Rathnayaka<br>EmpId:Emp199351545</h2><h3>Department:IT</h3><h4>Designation:Developer</h4><p id = "para12"> </p><button id="btn12" onclick="loadData('btn12')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Thashini lokuge<br>EmpId:Emp189313345</h2><h3>Department:Accounts</h3><h4>Designation:Director</h4><p id = "para13"> </p><button id="btn13" onclick="loadData('btn13')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Rameshika Madushi<br>EmpId:Emp171112645</h2><h3>Department:Accounts</h3><h4>Designation:Manager</h4><p id = "para14"> </p><button id="btn14" onclick="loadData('btn14')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Parami Nimuthu<br>EmpId:Emp195612345</h2><h3>Department:Accounts</h3><h4>Designation:Secretary</h4><p id = "para15"> </p><button id="btn15" onclick="loadData('btn15')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Maheshi kantha<br>EmpId:Emp199399945</h2><h3>Department:Audit</h3><h4>Designation:Manager</h4><p id = "para16"> </p><button id="btn16" onclick="loadData('btn16')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>John logi<br>EmpId:Emp199662645</h2><h3>Department:Audit</h3><h4>Designation:Accountant</h4><p id = "para17"> </p><button id="btn17" onclick="loadData('btn17')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Kumath Ekanayaka<br>EmpId:Emp199337745</h2><h3>Department:Audit</h3><h4>Designation:Accountant</h4><p id = "para18"> </p><button id="btn18" onclick="loadData('btn18')">View More</button></li>
<li><img id="img1" src="images/user1.jpg"><h2>Manupama Silva<br>EmpId:Emp199636445</h2><h3>Department:IT</h3><h4>Designation:Director</h4><p id = "para19"> </p><button id="btn19" onclick="loadData('btn19')">View More</button></li>
</ul>
</div>
<!--****************************  F  O  O  T  E  R  ****************************-->

		<div id="footer">
			<footer>	
				<p>
					<a href="#"><img id="help" src="./images/hs.png"></a>
					<sup>&#169;</sup> ABC Company (PVT) Ltd and contributors 2019
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
