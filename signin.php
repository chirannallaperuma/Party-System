<?php

include('config/authenticate.php');
 
   
if(isset($_SESSION['user'])){
    header('location: user/mypro.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('location: ../login.php');
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>AVCJ Party</title>
	<link href= "assets/css/style2.css" rel="stylesheet" type= "text/css">
	<title></title>
</head>
<body style="background-image: url('assets/img/bg.png');">
	<div class="nav">
		<ul>
			<li><a href="home.html" >Home</a></li>
			<li><a href="user/party.php" >Create Event</a></li>
			<li><a href="service/about.html" >About Us</a></li>
			<li><a href="service/ser.html" >Our Services</a></li>
			<li><a href="service/contact.php" >Contact Us</a></li>
			<li><a href="login.php" class="active">Login</a></li>
			<li><a href="signup.php">Register</a></li>
			<li><a href="user/mypro.php">My Profile</a></li>
			<li><a href="service/help.html">Help</a></li>
			<li><a href="service/help.html">Help</a></li>
			
		</ul>
		</div>

	<div class="logf">
	
        <form method="POST" action="config/authenticate.php">
            NIC: <input type="text" name="nic">
            Password: <input type="password" name="password">
        <button type="submit" name="login" style="margin-left: 25%;">Login</button>
        <button type="reset" style="margin-left: 25%;">Cancel</button>
    </form>
    New to our site? <a href="signup.php">Sign up</a>

		
	</div>

</body>
</html>