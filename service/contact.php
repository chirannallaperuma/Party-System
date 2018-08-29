<!DOCTYPE html>
<html>
<head>
	<title>AVCJ Party</title>
	<link href= "../assets/css/style2.css" rel="stylesheet" type= "text/css">
	<script type="text/javascript" src="../assets/js/script.js"></script>

	<title></title>
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="../home.html" >Home</a></li>
			<li><a href="../user/party.php" >Create Event</a></li>
			<li><a href="about.html" >About Us</a></li>
			<li><a href="ser.html" >Our Services</a></li>
			<li><a href="contact.php" class="active" >Contact Us</a></li>
			<li><a href="../login.php">Login</a></li>
			<li><a href="../signup.php">Register</a></li>
			<li><a href="../user/mypro.php">My Profile</a></li>
			<li><a href="help.html">Help</a></li>
			
		</ul>
		</div> 
	<h1 style="font-style: italic; text-align:center; " >Contact Us</h1>

	<div class="frmb">
		<form  method="POST"  action='contact.php' name='contact' onsubmit="return conempty()">
		Name :
		<input type="text" name="uname" placeholder="Your name..">
		Email :
		<input type="text" name="email" placeholder="Your Email..">
		Message :
		<input type="text" name="msg" placeholder="Your message..">

		<input type="submit" name="sub"  value="Submit" style="margin-left: 25%;">
		</form>
	</div>
	<br>
	<br>

	<h2 style="color: yellow; text-align:center;">Contact Details</h2>

	<div class="cdet">
		<h3>Address</h3>
		<p>No.32,<br>
			Reid Avenue,<br>
		Colombo 07.</p>
	</div>

	<div class="cdet">
		<h3>Call us</h3>
		<p>077 1231235<br>
			071 1231235<br></p>
	</div>

	<div class="cdet">
		<h3>Email Us</h3>
		<a href="avcjparty@gmail.com">avcjparty@gmail.com</a>
	</div>

</body>
</html>

<?php


include('../config/dbcon.php');


if (isset($_POST['sub'])) {

	$uname = ($_POST['uname']);
	$email = ($_POST['email']);
	$msg = ($_POST['msg']);

	
    $query = "INSERT INTO feedback(uname,email,msg) 
					  VALUES('$uname','$email','$msg')";

	mysqli_query($db,$query);


}


?>