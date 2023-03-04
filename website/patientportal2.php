<!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8">
	<meta name = "viewpoint" content="width=device-width",initial-scale=10">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="background.css">
		<title>Patient poral-NL Hospital</title>
		
		<style>
			a { text-decoration: none;}
		</style>
	</head>
	<body>
	<div class ="topnav">
	<img src ="logo4.png">
	<a href ="career.html">Career</a>
	<a href = "faq.html">FAQ</a>
	<a href ="contact.html">Contact</a>
	<a href ="aboutus.html">About Us</a>
	<a href = "homepage.html">Home</a>
	</div>

<?php

$con = new mysqli('localhost','root','','patient');
if(!$con)
{
die('Connection failed');
}

if(isset($_POST['submit']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$pname = $_POST['pname'];
	$pid = $_POST['pid'];
	$phonenum = $_POST['phonenum'];
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql_query = "insert into patientdetails(fname,lname,gender,dob,age,address,parentname,pid,phonenum,email,password) values ('$firstname','$lastname','$gender','$dob','$age','$address','$pname','$pid','$phonenum','$email','$password')";

if(mysqli_query($con,$sql_query))
{
echo "<center/>","<br/>","<br/>","<br/>","<img src =logo5.png>","<br/>","<br/>","<h1>"," Your Details Are Inserted Successfully","<br/>","<br/>","<br/>";
}
else
{
echo "Not successful Try again";
}
}
?>
<p style="background-image:linear-gradient(135deg,#06873F,#06873F);border-box:2px;border-radius:8px;width:100px;height:30px;padding:10px 10px;"><a style="color:white;font-size:20px;font-weight:bold;";a href="patientportal.php">Back</a><br><center></p></center>

<div class="bill4" >
<div class="bill5" style="background-image:linear-gradient(135deg,#ECF9F5,#9BF3D6);width:500px;height:550px;font-size:20px;padding:50px 100px;text-align:left;border-radius:8px;">

<?php 
	echo "<h1>" . "-Your Information-" . "</h1>"."<br>";
	echo"<b>". "Patient's Name: " ."</b>"." ". $_POST['firstname'] . " " .$_POST['lastname']. "<br>"."<br>";
	echo "<b>"."Gender: " ."</b>". $_POST['gender'] . "<br>" ."<br>" ;
	echo "<b>"."Date of Birth: " ."</b>". $_POST['dob'] . "<br>" ."<br>" ;
	echo "<b>"."Age: " ."</b>". $_POST['age']. " "."Years". "<br>" . "<br>";
	echo "<b>"."Address: " ."</b>". $_POST['address'] . "<br>" ."<br>" ;
	echo "<b>"."Parent or Guardin's Name: " ."</b>". $_POST['pname'] . "<br>" ."<br>" ;
	echo "<b>"."Parent's ID: " ."</b>". $_POST['pid'] . "<br>" ."<br>" ;
	echo "<b>"."phone number: " ."</b>". $_POST['phonenum'] . "<br>" . "<br>";
	echo "<b>"."Email: "." "." "."</b>" . $_POST['email'] . "<br>" . "<br>";
	
 ?>
</div><br>
</div>


<div>

<div class="img2">
<div class="tddiv">

<table style="margin-left:auto; margin-right:auto;border-spacing:5em 0em;">

<tr>
<td rowspan="5"><img src ="logo4.png" width="300px" height="150px"></td>
</tr>

<tr>
<td><a href ="Services.html" style="color:#ddd;">Services</a></td>
<td><a href ="Doctors.html" style="color:#ddd;">Doctors</a></td>
<td>New Life Hospital,<br>No.26, Galle Road , Colombo 6</td>
</tr>

<tr>
<td><a href ="Facilities.html" style="color:#ddd;">Facilities</a></td>
<td><a href ="Health Packages.html" style="color:#ddd;">Health Packages</a></td>
<td>newlifehospital@gmail.com</td>
</tr>

<tr>
<td><a href ="Rooms.html" style="color:#ddd;">Rooms</a></td>
<td><a href ="patientportal.php" style="color:#ddd;">Patient Registration</a></td>
<td>011 2635981</td>
</tr>

<tr>
<td><a href ="Food & Beverages.html" style="color:#ddd;">Food & Beverages</a>.
</td>
<td><a href ="Channel your doctor.html" style="color:#ddd;">Channel your doctor</a></td>
<td>011 2635982</td>
</tr>

</table>

<hr style="background-color:#BF9D7F;">
<p style="text-align:center"><b>©All Right Reserved | New Life Hospital</b></p>

</div>	
</div>
</body>
</html>