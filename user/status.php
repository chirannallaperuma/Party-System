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
<form method="POST">
	<button type="submit" name='logout' style="float: right;">Logout</button>
</form>
<br>

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

if (!$db) {
    die("Connection failed: ".mysqli_connect_error());
}


$query= "SELECT eventid,status FROM event WHERE nic='$user'; ";
$result = mysqli_query($db, $query);

$qq = mysqli_num_rows($result);

if($qq>0){
	echo "<table id='table1'>
			<tr>
				<th>Order ID</th>
				<th>Status</th>
			</tr>";

			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>
						<td>".$row['eventid']."</td>
						<td>".$row['status']."</td>
					</tr>";
			}
			echo "</table>";
}
?>
</body>
</html>