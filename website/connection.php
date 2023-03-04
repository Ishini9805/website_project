<?php
session_start();
header('location:signup.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'patient');


$email=$_POST['email'];
$password = $_POST['password'];


$s = "select * from login where email='$email'";

$result = mysqli_query ($con , $s);

$num = mysqli_num_rows($result);
if($num == 1){
	echo"Email Already Taken";
	
}
else{
	$reg="insert into login(email,password) values ('$email','$password')";
	mysqli_query($con,$reg);
	echo"Registration Successful";
}
						

?>