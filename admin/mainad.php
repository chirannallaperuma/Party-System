<!DOCTYPE html>
<html>
<head>
	<title>AVCJ Party</title>
	<link href= "../assets/css/style2.css" rel="stylesheet" type= "text/css">
</head>
<body>
<?php
session_start(); 
   
if(!isset($_SESSION['admin'])){
    header('location: ../login.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('location: ../login.php');
}


include('../config/dbcon.php');
?>


	<div class="admin" style="margin-left: 30%; height: 500px;">
		<h1 align="center"> Welcome Admin!!</h1>

	<form action="admin.php">
		<button  type="submit" style="float: none; margin-left: 25%">Edit Form</button> <br>
	</form>
	<form action="edituser.php">
		<button  type="submit" style="float: none; margin-left: 25%">Edit User</button><br>
	</form>
	<form action="viewuser.php">
		<button  type="submit" style="float: none; margin-left: 25%">Manage Orders</button> <br>
	</form>
	<form action="viewfb.php">
		<button  type="submit" style="float: none; margin-left: 25%">View Feedbacks</button> <br>
	</form>
	<form action="mainad.php" method="POST">
		<button  type="submit" name='logout' style="float: none; margin-left: 25%; background-color: red;">Logout</button></a> <br>
	</form>

	</div>

</body>
</html>