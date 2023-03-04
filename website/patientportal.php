<!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8">
	<meta name = "viewpoint" content="width=device-width",initial-scale="10">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="background.css">
	
		<title>patient portal-NL Hospital</title>
		
		<style>
			a { text-decoration: none;}
			
			.input-box{
				font-size:20px;
				left:20px;
				font-family:arial;
				font-weight:bold;
				
			}
			
			.bill2 form .user-details{
				
				justify-content:space-between;
			}
			.user-details .input-box input{
				width:200%;
				height:45px;
				outline:none;
				border-radius:5px;
				border:1px solid #ccc ;
				padding-left:15px;
				font-size:16px;
				border-bottom-width:3px;
				trsnsition: all 0.3s ease;
			

			}
			.user-details .input-box input:focus,
			.user-details .input-box input:valid{
				border-color:#7C1DB2;
			}
			form .user-details .input-box{
				margin:15px;
				width: calc(100% / 2 - 30px);
			}
			.bill .bill1 p{
				text-align:center;
					margin:30px;
					font-family:stencil;
					color:#000000;
					font-size:40px;
					color:#080F5E;
					text-shadow:5px 5px 5px #F8F8FD;
				}
			.bill .bill1{position:relative;
				left:200px;
				margin:30px;
				padding:20px;
				box-sizing: border-box;
				border-radius:8px;
				box-shadow:0 5px 15px rgba(0,0,0,.5);
				background-color:#48D9D8;
				opacity:0.9;
			}
			.user-details .input-box details{
				display:block;
				font-weight:500;
				margin-bottom:10px;
			}
			
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
	
		<img src ="patientportal.jpg" alt="">
		
	</div>
	<div class ="content">
	<div class ="heading">
	<h1 >Patient Portal</h1>
	</div>
	<img src ="logo4.png" >
	</div>
	</div>
<br><br>

	<h1 style="text-align:center; font-family:Times New Roman;">Patient Portal</h1>
<hr><br><br>

<div class="bill" >

	<div class="bill1" style="background-image:linear-gradient(135deg,#B2F3CF,#7C1DB2);width:900px;height:1600px;padding:50px 100px;">
	
	<div class="bill2" style="background-color:white; width:550px;height:1430px; padding:30px 70px; border-radius:8px;"><img src ="logo4.png" style="position:absolute;left:120px;top:60px;width:170px ;height:130px;" ><p>Patient Details</p>
	<hr style="height:4px;background:linear-gradient(135deg,#71b7e6,#9b59b6">
	


	<form action ="patientportal2.php" method="POST">
	
	<div class="user-details">
	<div class="input-box">
	<span class="details">Patient's First name</span>
	<input type="text" placeholder="Enter your  first name" name="firstname" required> 
	</div><br>
	
	<div class="input-box">
	<span class="details">Patient's Last name</span>
	<input type="text" placeholder="Enter your last name" name="lastname"required> 
	</div><br>
	
	<label for="gender" style=" font-size:20px;font-weight:bold;font-family:arial;padding:50px 20px">Gender :</label> <br><br>
		<label for="male"  style=" font-size:16px;font-weight:bold;font-family:arial;padding:0px 40px">Male</label>
	 <input type="radio" name="gender" id="male" value="male">
	<label for="fmale" style=" font-size:16px;font-weight:bold;font-family:arial;padding:0px 30px">Female</label>
	 <input type="radio" name="gender" id="female" value="female"><br>
	 
	 <div class="input-box">
	<span class="details">Date of Birth</span>
	<input type="date" placeholder="Enter your date of birth"  name="dob"required> 
	</div><br>
	
	<div class="input-box">
	<span class="details">Age</span>
	<input type="age" placeholder="Enter your age" name="age"required> 
	</div><br>
	 
	<div class="input-box">
	<span class="details">Address</span>
	<input type="text" placeholder="Enter your address" name="address"required> 
	</div><br>
	
	<div class="input-box">
	<span class="details">Parent or Gaurdian Name</span>
	<input type="text" placeholder="Enter your parent or gaurdian name" name="pname"required> 
	</div><br>
	<div class="input-box">
	<span class="details">Parent or Gaurdian ID </span>
	<input type="text" placeholder="Enter your parent ID" name="pid" required> 
	</div><br>
	<div class="input-box">
	<span class="details">Phone Number</span>
	<input type="text" placeholder="Enter your phone number" name="phonenum" required> 
	</div><br>
	
	<div class="input-box">
	<span class="details">Email</span>
	<input type="email" placeholder="Enter your email" name="email" required>
	</div><br>
	

	<div class="input-box">
	<span class="details">Password</span>
	<input type="password" placeholder="Enter your password" name="password" required>
	</div><br>
	<input type ="submit" name="submit" value="submit" style="width:250px;height:40px;background-image:linear-gradient(135deg,#B2F3CF,#7C1DB2);">
	<input type ="reset" name="reset" value="reset" style="width:250px;height:40px;background-image:linear-gradient(135deg,#B2F3CF,#7C1DB2"><br><br>
	
	
	</div><br>
	
	</div>
	</div>
	</div>
</div>
	</div>
	
	
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