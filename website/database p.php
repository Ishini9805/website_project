 <!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8">
	<meta name = "viewpoint" content="width=device-width",initial-scale=10">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="background.css">
	<link rel="stylesheet" href="collapsible.css">
		<title>Payment-NL Hospital</title>
		
		
			<style>
			a { text-decoration: none;}
			p {font-size:20px;text-align:justify; margin:30px;}
			
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
  

 <center>
<?php
		
		$con = new mysqli('localhost','root','','patient');
		if(!$con)
		{
			die('Connection failed');
		}
		
		if(isset($_POST['submit']))
		{
			$UserId = $_POST['UserId'];
			$Name = $_POST['Name'];
			$CardNo = $_POST['CardNo'];
			$NameOnCard = $_POST['NameOnCard'];
			$expYearMonth = $_POST['expYearMonth'];
			$CVV = $_POST['CVV'];
			$Payment = $_POST['Payment'];
			
			$sql_query = "INSERT INTO online_payments(UserId,Name1,CardNo,NameOnCard,expYearMonth,CVV,Payment) 
			VALUES('$UserId','$Name','$CardNo','$NameOnCard','$expYearMonth','$CVV','$Payment')";
			
			if(mysqli_query($con,$sql_query))
			{
				echo "<center/>","<br/>","<br/>","<br/>","<img src =logo5.png>","<br/>","<br/>","<h1>","Successful Payment Your payment has been completed successfully","<br/>","<br/>","<br/>","<br/>";
			}
			else
			{
				echo "<center/>","<br/>","<br/>","<br/>","<img src =logo5.png>","<br/>","<br/>","<h1>","Not successful Try again","<br/>","<br/>","<br/>","<br/>";
			}
		}	
?>
</center>
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