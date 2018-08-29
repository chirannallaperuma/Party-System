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


	<form method="POST" action="view.php">
		<button type="submit" name="logout" style="float: right;">Logout</button>
	</form>
	<br>


<?php

include('../config/dbcon.php');

session_start(); 
   
if(!isset($_SESSION['user'])){
    header('location: ../login.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('location: ../login.php');
}





$query = "SELECT * FROM event  ORDER BY eventid DESC LIMIT 1; ";
$result = mysqli_query($db, $query);

$qq = mysqli_num_rows($result);

if ($qq > 0 ){
	echo "<table id='table1' style='margin-top:10px;'>
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


		$photo_q = mysqli_query($db, "SELECT pprice FROM photo WHERE name = '$photo' ");
		$row13 = mysqli_fetch_assoc($photo_q);
		$photo_price = $row13['pprice'];

		$video_q = mysqli_query($db, "SELECT vprice FROM photo WHERE name = '$video' ");
		$row12 = mysqli_fetch_assoc($video_q);
		$video_price = $row12['vprice'];

		$cake_q = mysqli_query($db, "SELECT price FROM cakes WHERE name = '$cake' ");
		$row2 = mysqli_fetch_assoc($cake_q);
		$cake_price = $row2['price'];

		$tables_q1 = mysqli_query($db, "SELECT tprice FROM tables WHERE name = '$tables' ");
		$row3 = mysqli_fetch_assoc($tables_q1);
		$t_price = $row3['tprice'];

		$tables_q2 = mysqli_query($db, "SELECT cprice FROM tables WHERE name = '$tables' ");
		$row4 = mysqli_fetch_assoc($tables_q2);
		$c_price = $row4['cprice'];

		$tables_q3 = mysqli_query($db, "SELECT tentprice FROM tables WHERE name = '$tables' ");
		$row5 = mysqli_fetch_assoc($tables_q3);
		$tent_price = $row5['tentprice'];

		$venues_q = mysqli_query($db, "SELECT price FROM venues WHERE name = '$venues' ");
		$row6 = mysqli_fetch_assoc($venues_q);
		$venues_price = $row6['price'];

		$music_q = mysqli_query($db, "SELECT price FROM music WHERE name = '$music' ");
		$row7 = mysqli_fetch_assoc($music_q);
		$music_price = $row7['price'];

		$deco_q = mysqli_query($db, "SELECT price FROM deco WHERE name = '$deco' ");
		$row8 = mysqli_fetch_assoc($deco_q);
		$deco_price = $row8['price'];

		$food_q1 = mysqli_query($db, "SELECT pkg1 FROM food WHERE name = '$food' ");
		$row9 = mysqli_fetch_assoc($food_q1);
		$pkg1_price = $row9['pkg1'];

		$food_q2 = mysqli_query($db, "SELECT pkg2 FROM food WHERE name = '$food' ");
		$row10 = mysqli_fetch_assoc($food_q2);
		$pkg2_price = $row10['pkg2'];

		$food_q3 = mysqli_query($db, "SELECT pkg3 FROM food WHERE name = '$food' ");
		$row11 = mysqli_fetch_assoc($food_q3);
		$pkg3_price = $row11['pkg3'];

		


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

	echo "</table><br>";

}

$ftotal=0;
if($pkgtype=='1'){
	$ftotal=$pkg1_price;

}
elseif ($pkgtype=='2') {
	$ftotal=$pkg2_price;
}
elseif ($pkgtype=='3') {
	$ftotal=$pkg3_price;
}


echo "<h2>Your Current Total Budget Is...<h2><br>";
echo "Rs."; echo ($cake_price*$cpieces)+$photo_price+$video_price+($t_price*$tamount)+($c_price*$camount)+($tent_price*$tentamount)+$venues_price+$music_price +$deco_price+($ftotal*$plates); echo "/=";



mysqli_close($db);

?>
<form action="update.php">
		<button type="submit" name="update">Edit Your Event</button>
</form>

</body>
</html>