<!DOCTYPE html>
<html>
<head>
	<link href= "../assets/css/style2.css" rel="stylesheet" type= "text/css">
	<title>AVCJ Party</title>
</head>
<body>
<form method="POST">
		<button type="submit" name="logout" style="float:right;background-color: red;">Logout</button>
	</form>
<form action="mainad.php">
        <button  type="submit"style="float: right; margin-left: 30%; background-color: white;">Admin Main Page</button></a> <br>
    </form>
<br>
<br>


<?php

include('../config/dbcon.php');

session_start(); 
   
if(!isset($_SESSION['admin'])){
    header('location: ../login.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('location: ../login.php');
}

$query= "SELECT * FROM feedback";
$result = mysqli_query($db, $query);

$qq = mysqli_num_rows($result);

if ($qq > 0 ){
	echo "<table id='table1'>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Meassage</th>
			</tr>";
	while ($row = mysqli_fetch_assoc($result)){
		$uname=$row['uname'];
		$email=$row['email'];
		$msg=$row['msg'];

		echo "<tr>
				<td>".$uname."</td>
				<td>".$email."</td>
				<td>".$msg."</td>
			</tr>";
	}	
	echo "</table>";
}
else{
	echo "There in no feedbacks ye!!! Stay Alive";
}

mysqli_close($db);

?>

</body>
</html>