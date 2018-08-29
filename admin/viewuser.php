<!DOCTYPE html>
<html>
<head>
	<title>AVCJ Party</title>
	<link href= "../assets/css/style2.css" rel="stylesheet" type= "text/css">
</head>
<body>
	<form method="POST">
		<button type="submit" name="logout" style="float:right;background-color: red;">Logout</button>
	</form>
<form action="mainad.php">
        <button  type="submit"style="float: right; margin-left: 30%; background-color: white;">Admin Main Page</button></a> <br>
    </form>


<form method="POST" action="viewuser.php">
	Enter EventID to Reject or Approve :
	<input type="number" name="eventid"><br>
	<button type="submit" name="approve">Approve</button>
	<button type="submit" name="reject" style="background-color: red;">Reject</button>
	<button type="submit" name="dorder">Delete Order</button>
	
</form>
<br>
<br>

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

$a="Approve";
$b="Reject";

if (isset($_POST['approve'])) {
	$eventid=($_POST['eventid']);
	$query2= "UPDATE event SET status = '$a' WHERE eventid = $eventid;";
	mysqli_query($db,$query2);
}
if (isset($_POST['reject'])) {
	$eventid=($_POST['eventid']);
	$query3= "UPDATE event SET status = '$b' WHERE eventid = $eventid;";
	mysqli_query($db,$query3);
}
if (isset($_POST['dorder'])) {
	$eventid=($_POST['eventid']);
	$query4= "DELETE  FROM event WHERE eventid=$eventid;";
	mysqli_query($db,$query4);
}



$query= "SELECT * FROM event";
$result = mysqli_query($db, $query);

$qq = mysqli_num_rows($result);

if ($qq > 0 ){
	echo "<table id='table1'>
			<tr>
				<th>Event ID</th>
				<th>Name</th>
				<th>Date</th>
				<th>NIC</th>
				<th>Photography</th>
				<th>Cake Partner</th>
				<th>Tables</th>
				<th>Venue</th>
				<th>Music and Light</th>
				<th>Decoration</th>
				<th>Caterign Service</th>
				<th>Other</th>
				<th>Status</th>
			</tr>";
	while ($row = mysqli_fetch_assoc($result)){
		$eventid=$row['eventid'];
		$name=$row['name'];
		$date=$row['date'];
		$nic=$row['nic'];
		$photo=$row['photo'];
		$cake=$row['cake'];
		$tables=$row['tables'];
		$venues=$row['venues'];
		$music=$row['music'];
		$deco=$row['deco'];
		$food=$row['food'];
		$other=$row['other'];
		$status=$row['status'];

		echo "<tr>
				<td>".$eventid."</td>
				<td>".$name."</td>
				<td>".$date."</td>
				<td>".$nic."</td>
				<td>".$photo."</td>
				<td>".$cake."</td>
				<td>".$tables."</td>
				<td>".$venues."</td>
				<td>".$music."</td>
				<td>".$deco."</td>
				<td>".$food."</td>
				<td>".$other."</td>
				<td>".$status."</td>
			</tr>";
	}	
	echo "</table>";
}

mysqli_close($db);

?>

<?php




?>

</body>
</html>
