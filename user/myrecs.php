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


$query= "SELECT * FROM event WHERE nic='$user'; ";
$result = mysqli_query($db, $query);

$qq = mysqli_num_rows($result);

if ($qq > 0 ){
	echo "<table id='table1'style='margin-top:10px;'>
			<tr>
				<th>Event ID</th>
				<th>Name</th>
				<th>Date</th>
				<th>NIC</th>
				<th>Photography</th>
				<th>Videography</th>
				<th>Cake Partner</th>
				<th>Cake Pieces</th>
				<th>TCT Vendor</th>
				<th>Table Amount</th>
				<th>Chair Amount</th>
				<th>Tent Amount</th>
				<th>Venue</th>
				<th>Music and Light</th>
				<th>Decoration</th>
				<th>Caterign Service</th>
				<th>Pakage Type</th>
				<th>Plates</th>
				<th>Other</th>
			</tr>";
	while ($row = mysqli_fetch_assoc($result)){
		$eventid=$row['eventid'];
		$name=$row['name'];
		$date=$row['date'];
		$nic=$row['nic'];
		$photo = $row['photo'];
		$video= $row['video'];
		$cake = $row['cake'];
		$cpieces=$row['cpieces'];
		$tables = $row['tables'];
		$tamount=$row['tamount'];
		$camount=$row['camount'];
		$tentamount=$row['tentamount'];
		$venues = $row['venues'];
		$music = $row['music'];
		$deco = $row['deco'];
		$food = $row['food'];
		$pkgtype=$row['pkgtype'];
		$plates = $row['plates'];
		$other=$row['other'];
		$status=$row['status'];

		echo "<tr>
				<td>".$eventid."</td>
				<td>".$name."</td>
				<td>".$date."</td>
				<td>".$nic."</td>
				<td>".$photo."</td>
				<td>".$video."</td>
				<td>".$cake."</td>
				<td>".$cpieces."</td>
				<td>".$tables."</td>
				<td>".$tamount."</td>
				<td>".$camount."</td>
				<td>".$tentamount."</td>
				<td>".$venues."</td>
				<td>".$music."</td>
				<td>".$deco."</td>
				<td>".$food."</td>
				<td>".$pkgtype."</td>
				<td>".$plates."</td>
				<td>".$other."</td>
			</tr>";
	}	
	echo "</table>";
}
else{
	echo "You don't have created any event yet<br>";
	echo "<form action='party.php'>
			<button type='submit'>Create Event</button>
		</form>";
}

mysqli_close($db);
?>
</body>
</html>