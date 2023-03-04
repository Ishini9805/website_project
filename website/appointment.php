<!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content="width=device-width",initial-scale=10">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="background.css">
	
		<title>Appointment-NL Hospital</title>
		
				
	</head>
	<body>
	<style>
body {
  font-family: Arial;
}

select { 
color: gray;
 }

input[type=text], select {
   font-family: monaco;
  font-size: 15px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date], select {
  font-family: monaco;
  font-size: 15px;
   color: gray;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=time], select {
  font-family: monaco;
  font-size: 15px;
   color: gray;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 
input[type=submit] {
  font-family: monaco;
  font-size: 15px;
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #04AA6D;
}

textarea {
   padding:14px  20px;
  font-family: monaco;
  font-size: 15px;
 }
 
 table.table1{
 border-collapse:collapse;
 }
 
div.form{
  padding-top:5px;
   height:680px;
   width: 300px;
   border-radius: 5px;
  background-color: white;
  padding: 15px;
}

div.polaroid {
 padding-top:50px;
  height:600px;
  width: 90%;
  background-color: #f5f5f5;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2), 0 10px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  padding: 5px 20px;
}

.container h5{
font-family:Candara;
}

.container h2{
font-family:Jenn Penn;
}

.button{
  font-family: monaco;
  display: inline-block;
  font-size: 15px;
  width: 60%;
  background-color: green;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  }
  
.button1{
 background-color: #4CAF50;
 color:white;
 width: 200px;
 }
 
 .button1:hover{
 background-color:white;
  color:#4CAF50;
  border: 2px solid #4CAF50;
 }
 
 .button2{
 background-color: #008CBA;
 color:white;
 width: 200px;
 }
 
 .button2:hover{
 background-color:white;
  color:#008CBA;
  border: 2px solid #008CBA;
 }

</style>
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
	
		<img src ="onlineappointment.jpg" alt="">
		
	</div>
	<div class ="content">
	<div class ="heading">
	<h1 >Online</h1><h1 style="font-size:45px;"> Appointment</h1>
	</div>
	<img src ="logo4.png" >
	</div>
	</div>
<br><br>
	
	<h1 style="text-align:center; font-family:Times New Roman;">Online Appointment</h1>
<hr>
	
	<center>	
<table class="table1" style=" width=100%; height:550px; background-image:url(pharmacy6.jpg)"> 
<td  valign=middle align="center" style="width:900px; ">

<div class="polaroid">
<img src="appoitment.jpg" style="width:420px;  height:280px">

<div class="container"><h2 style="font-size:42px;  color: black">Your<span style="color:#5eb344"> Health</span> is Our Priority</h2>
<p>
<h5 style="font-size:16px; color: gray"> Request an appointment using  our secure online form.<br><br>
All appointments are priritized on the basis of medical need.</p>
<br>
<div style = "width:500px;">
<button class="button button1" onClick="location.href='appointment.php'">make an appointment</button>
 <button class="button button2" onClick="location.href='contact.html'">Contact us</button>
</div>
</div>
</div>

</td>

<td  align="center" style="width:400px; background-color: transparent"">	
<div class="form">
  <form name="frmappointment"  method="post" action="insert.php">

    <h5 style="font-family:bell gothic std light; color: #0c74b3;">APPOINTMENT FORM</h5>
   
    <input type="text" id="fname" name="fname" placeholder=" First Name">

    <input type="text" id="lname" name="lname" placeholder=" Last Name">

    <select id="service" name="service">
	  <option value="">Select Your Service</option>
      <option value="Neurology">Neurology</option>
      <option value="Cardiology">Cardiology</option>
      <option value="Dental">Dental</option>
      <option value="Ophthalmology">Ophthalmology</option>
	  <option value="Other ">Other Services</option>
    </select>
	
	  <input type="text"id="phone"name="phone" placeholder=" Phone">
	  
	  <input type="date"  id="date" name="date"  value=""  >
	  
	  <input type="time" id="time" name="time"  placeholder="Time">
	  
	  <textarea id="   message" name="message" placeholder="Message" style="height:150px;width:255px"></textarea>
  
    <input type="submit" value="Submit">
  </form>

</td>
</div> 
</table>
</center>
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