
<!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8">
	<meta name = "viewpoint" content="width=device-width",initial-scale=10">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="background.css">
		<title>Medical records-NL Hospital</title>
		
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
	<div class="Box">
	<div class="image-container">
	
		<img src ="medicalrecords.jpg" alt="">
		
	</div>
	<div class ="content">
	<div class ="heading">
	<h1 >Medical Records</h1>
	</div>
	<img src ="logo4.png" >
	</div>
	</div>
<br><br>
	
	<h1 style="text-align:center; font-family:Times New Roman;">Medical Records</h1>
<hr><br><br>
	
	
	<center><p style="background-image:linear-gradient(135deg,#F98968,#F5AF70);font-size:20px;border-box:2px;border-radius:8px;width:900px;height:20px;padding:20px 20px;">* Please collect the patient's ID number from calling this hospital contact number '1101'.</p></center>
	
	<center><br><br>
	<div class="reserved">
		<form action="" method="GET" >
			<input type="text" name="ID" placeholder="Enter Patient ID" style="width:200px;height:50px;box-sizing: border-box;border-radius:8px;" >
			<input type="submit" name="search" value="Search By ID" style="width:100px;height:30px;box-sizing: border-box;border-radius:4px;background-color:#45D9DB">
			</form><br>
			<br><br>
			<table border="1px" style="border:2px;height:50px;width:1300px;background-color:#5CF8A1">
						<tr>
								<th>Patient First Name</th>
								<th>Last Name</th>
								<th>Gender</th>
								<th>Date Of Birth</th>
								<th>Address</th>
								<th>Parent or Guardian Name</th>
								<th>Parent ID</th>
								<th>Phone Number</th>
								<th>E-mail</th>
								<th>patient records</th>
								
								
						</tr><br>
						<?php
						$connection = mysqli_connect('localhost','root','','patient');
						if(!$connection)
							{
							die('Connection failed');
								}
						
						if(isset($_GET['search']))
						{
							
							$ID=$_GET['ID'];
							$query = "SELECT patientdetails.fname,patientdetails.lname,patientdetails.gender,patientdetails.dob,patientdetails.address,patientdetails.parentname,patientdetails.pid,patientdetails.phonenum,patientdetails.email, records.records FROM patientdetails INNER JOIN records ON patientdetails.ID=records.ID_fk where ID='$ID'; ";
							$result=mysqli_query($connection,$query);
							
							
							
							foreach($result as $row)
							{
								?>
								<tr>
									<td> <?php echo $row['fname']; ?></td>
									<td> <?php echo $row['lname']; ?></td>
									<td> <?php echo $row['gender']; ?></td>
									<td> <?php echo $row['dob']; ?></td>
									<td> <?php echo $row['address']; ?></td>
									<td> <?php echo $row['parentname']; ?></td>
									<td> <?php echo $row['pid']; ?></td>
									<td> <?php echo $row['phonenum']; ?></td>
									<td> <?php echo $row['email']; ?></td>
									<td> <?php echo $row['records']; ?></td>
									
								</tr>
								<?php
							}
						
						}
						?>
			</table>
		<center>
	</div><br><br>
	
	</div>
	<p style="background-image:linear-gradient(135deg,#06873F,#06873F);border-box:2px;border-radius:8px;width:100px;height:30px;padding:10px 10px;"><a style="color:white;font-size:20px;font-weight:bold;";a href="signup.php">Log out</a><br><center></p></center>
	<br><br>
	
	
	
	

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