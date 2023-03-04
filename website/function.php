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
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'patient');


$email=$_POST['email'];
$password = $_POST['password'];


$s = "select * from login where email='$email' && password='$password'";

$result = mysqli_query ($con , $s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:medicalrecords.php');
}
else{
	echo "<center/>","<br/>","<br/>","<br/>","<img src =logo5.png>","<br/>","<br/>","<h1>"," Your Details Are Incorrect!","<br/>","<br/>";
	
}
?>
<p style="background-image:linear-gradient(135deg,#06873F,#06873F);border-box:2px;border-radius:8px;width:100px;height:30px;padding:10px 10px;"><a style="color:white;font-size:20px;font-weight:bold;";a href="signup.php">Back</a><br></p>


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
<td><a href ="Patient Registration.html" style="color:#ddd;">Patient Registration</a></td>
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