
<!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8">
	<meta name = "viewpoint" content="width=device-width",initial-scale=10">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="background.css">
	<link rel="stylesheet" href="form.css">
		<title>Sign up-NL Hospital</title>
		
		<style>
			a { text-decoration: none;}
			
			body  
{  
    margin: 0;  
    padding: 0;  
    background-color:#6abadeba;  
    font-family: 'Arial';  
}  
         
          
}  
h2{  
    text-align: center;  
    color: #277582;  
    padding: 20px;  
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#email{  
    width: 400px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#password{  
    width: 400px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  

#log{  
	text-align:center;
    width: 100px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}  
span{  
    color:black;  
    font-size: 17px;  
} 
button{
	background-color:#04AA6D;
	color:white;
	padding:10px 20px;
	width:230px;
	height:50px;
}
	
 .login{
	 display:flex;
	 padding:50px 200px;
	 
	 
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
	
		<img src ="login1.jpg" alt="">
		
	</div>
	<div class ="content">
	<div class ="heading">
	<h1 >Login & Signup</h1>
	</div>
	<img src ="logo4.png" >
	</div>
	</div>
<br><br>
<hr>
<tr>
<center>
	<div class="bill">
	<div class="login" >
	<div class="col-md-6" style="display:flex;" >    
	
    <form method="POST" action="function.php "> 
	<div class="bill2" style="  border-radius:8px; width:450px;height:400px;padding:30px 30px;  background:rgba(000,000,000,0.3);  border-radius: 15px ;">
	<h2>LOGIN HERE</h2>
	<hr> <br> 
		<div class="form-group" >
        <label><b>Email     
        </b>    
        </label> <br>   
        <input type="email" name="email" id="email" placeholder=" Enter Email" required>   </div> 
        <br>  <br>    
		<div class="form-group" >
        <label><b>Password     
        </b>    
        </label>    
        <input type="password" name="password" id="password" placeholder=" Enter Password" required>   </div> 
        <br><br> <br>  	
         
		<div class="clearfix">
		<button type="submit" class="signupbtn">LOGIN</button>
		</form>
		</div>
		</div> <br>  
		<div class="col-md-6" style="display:flex;" >     
    <form method="POST" action="connection.php "> 
	<div class="bill2" style="background-color:white; border-radius:8px; height:400px;padding:30px 30px;  background:rgba(000,000,000,0.5);  border-radius: 15px ;">
		<h2>REGISTER HERE</h2>
		<hr> <br> 
        <label><b>Email     
        </b>    
        </label> <br>   
        <input type="email" name="email" id="email" placeholder=" Enter Email" required style="color:grey;">    
        <br><br><br>    
        <label><b>Password     
        </b>    
        </label>   <br>   
        <input type="password" name="password" id="password" placeholder=" Enter Password" required>    
        <br><br>  	
          
      <br>  <br> 
		<div class="clearfix">
		<button type="submit" class="signupbtn">REGISTER</button>
		</div>   
    </div>
		</div>   
    </form>     
  </div>
</div>
</div>
</div>
</tr>





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