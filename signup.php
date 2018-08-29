<!DOCTYPE html>
<html>
<head>
	<title>AVCJ Party</title>
	<link href= "assets/css/style2.css" rel="stylesheet" type= "text/css">
	<script type="text/javascript" src="assets/js/script.js"></script>
	<title></title>
</head>
<body style="background-image: url('assets/img/bg.png');">
<?php
session_start(); 
   
if(isset($_SESSION['user'])){
    header('location: user/mypro.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('location: ../login.php');
}
?>
	<div class="nav">
		<ul>
			<li><a href="home.html" >Home</a></li>
			<li><a href="user/party.php" >Create Event</a></li>
			<li><a href="service/about.html" >About Us</a></li>
			<li><a href="service/ser.html" >Our Services</a></li>
			<li><a href="service/contact.php" >Contact Us</a></li>
			<li><a href="signup.php" class="active">Register</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="user/mypro.php">My Profile</a></li>
			<li><a href="service/help.html">Help</a></li>
			
		</ul>
		</div>

	<div class="logf">
	
        <form method="POST" action="signup.php" name="signupf" onsubmit="return signupcheck()">
            Name: <input type="text" name="name">
            Email: <input type="email" name="email">
            NIC: <input type="text" name="nic" max="10">
            Password: <input type="password" name="password1" id="p1">
            Confirm Password:<input type="password" name="password2" id="p2">
        <button type="submit" name="sup" style="margin-left: 25%;">Sign Up</button>
        <button type="reset" style="margin-left: 25%;">Cancel</button>
    </form>	
	</div>

</body>
</html>



<?php

	

include('config/dbcon.php');




if (isset($_POST['sup'])){
	
$name = ($_POST['name']);
$email = ($_POST['email']);
$nic = ($_POST['nic']);
$password = md5($_POST['password1']);


 $query = "INSERT INTO users(username,email,nic,password) VALUES ('$name','$email','$nic','$password')";

 	mysqli_query($db,$query);
 	header('location:login.php');


}


?>