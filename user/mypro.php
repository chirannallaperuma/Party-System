<!DOCTYPE html>
<html>
<head>
	<title>AVCJ Party</title>
	<link href= "../assets/css/style2.css" rel="stylesheet" type= "text/css">
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="../home.html">Home</a></li>
			<li><a href="party.php" >Create Event</a></li>
			<li><a href="../service/about.html" >About Us</a></li>
			<li><a href="../service/ser.html" >Our Services</a></li>
			<li><a href="../service/contact.php" >Contact Us</a></li>
			<li><a href="../login.php">Login</a></li>
			<li><a href="../signup.php">Register</a></li>
			<li><a href="mypro.php" class="active">My Profile</a></li>
			<li><a href="../service/help.html">Help</a></li>
			
		</ul>
		</div>

<?php
session_start(); 
   
if(!isset($_SESSION['user'])){
    header('location: ../login.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('location: ../login.php');
}


include('../config/dbcon.php');
$user=$_SESSION['user'];
?>


	<div class="admin" style="margin-left: 30%; height: 500px;">
		<h1 align="center"> Welcome <?php echo "$user!!!"; ?></h1>

	<form action="myrecs.php">
		<button  type="submit" style="float: none; margin-left: 30%;">Your Orders</button> <br>
	</form>

	<form action="party.php">
		<button  type="submit" style="float: none; margin-left: 30%;">Create New Order</button> <br>
	</form>

	<form action="status.php" method="POST">
		<button  type="submit" name='status' style="float: none; margin-left: 30%;">Order Status</button></a> <br>
	</form>

	<form method="POST">
		<button  type="submit" name='payment' style="float: none; margin-left: 30%;">Payments</button></a> <br>
	</form>

	<form action="mypro.php" method="POST">
		<button  type="submit" name='logout' style="float: none; margin-left: 30%; background-color: red;">Logout</button></a> <br>
	</form>
	
	</div>
</body>
</html>