<?php
session_start(); 
   
if(!isset($_SESSION['user'])){
    header('location: ../signin.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('location: ../login.php');
}


include('../config/dbcon.php');
?>


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
			<li><a href="party.php" class="active">Create Event</a></li>
			<li><a href="../service/about.html" >About Us</a></li>
			<li><a href="../service/ser.html" >Our Services</a></li>
			<li><a href="../service/contact.php" >Contact Us</a></li>
			<li><a href="../login.php">Login</a></li>
			<li><a href="../signup.php">Register</a></li>
			<li><a href="../user/mypro.php">My Profile</a></li>
			<li><a href="../service/help.html">Help</a></li>
			
		</ul>
	</div>

	<div class="frm">
		<form method="post" action="create.php" name="party" onsubmit="return empty()">
			Event Name :
			<input type="text" name="name">
            Date:
            <input type="date" name="date">
            NIC:
            <input type="text" name="nic">
			Photography Partner :
				<?php 
						$sql ="SELECT pid, name FROM photo";
						$result= mysqli_query($db,$sql);

	    				echo "<select name='photo'>";
	    				echo '<option value="">Select a Photographer</option>';
   						while ($row = mysqli_fetch_assoc($result)) {
              				$pid = $row['pid'];
              				$name = $row['name']; 
              				echo '<option value="'.$name.'">'.$name.'</option>'; 
						}
    					echo "</select>";

				?>
				
			<br>
			<br>
			Videography Partner :
				<?php 
						$sql ="SELECT pid, name FROM photo";
						$result= mysqli_query($db,$sql);
						
	    				echo "<select name='video'>";
	    				echo '<option value="">Select a Videogrpaher</option>';
   						while ($row = mysqli_fetch_assoc($result)) {
              				$pid = $row['pid'];
              				$name = $row['name']; 
              				echo '<option value="'.$name.'">'.$name.'</option>'; 
						}
    					echo "</select>";

				?>
				
			<br>
			<br>
			Cakes :
			<?php 
						$sql ="SELECT cid, name FROM cakes";
						$result= mysqli_query($db,$sql);
					
	    				echo "<select name='cake'>";
	    				echo '<option value="">Select a Cake Supplier</option>';
   						while ($row = mysqli_fetch_assoc($result)) {
         
              				$cid = $row['cid'];
              				$name = $row['name']; 
              				echo '<option value="'.$name.'">'.$name.'</option>'; 
						}
    					echo "</select>";
				?>
			Pieces:
			<input type="number" name="cpieces"><br>
			<br>
			<br>
			Tables Chairs and Tents :
			<?php 
						$sql ="SELECT tid, name FROM tables";
						$result= mysqli_query($db,$sql);
					
	    				echo "<select name='tables'>";
	    				echo '<option value="">Select a Table Vendor</option>';
   						while ($row = mysqli_fetch_assoc($result)) {
              				unset($tid, $name);
              				$tid = $row['tid'];
              				$name = $row['name']; 
              				echo '<option value="'.$name.'">'.$name.'</option>'; 
						}
    					echo "</select>";
				?>
			Table Amount:
				<input type="number" name="tamount"><br>
			Chair Amount:
				<input type="number" name="camount"><br>
			Tent Amount:
				<input type="number" name="tentamount"><br>

			<br>
			<br>
			Venues :
			<?php
						$sql ="SELECT vid, name FROM venues";
						$result= mysqli_query($db,$sql); 
							
	    				echo "<select name='venues'>";
	    				echo '<option value="">Select a Venue</option>';
   						while ($row = mysqli_fetch_assoc($result)) {
              				unset($vid, $name);
              				$vid = $row['vid'];
              				$name = $row['name']; 
              				echo '<option value="'.$name.'">'.$name.'</option>'; 
						}
    					echo "</select>";
				?>

			<br>
			<br>
			Lightning and Music :
			<?php 
						$sql ="SELECT mid, name FROM music";
						$result= mysqli_query($db,$sql);
						
	    				echo "<select name='music'>";
	    				echo '<option value="">Select a Music Provider</option>';
   						while ($row = mysqli_fetch_assoc($result)) {
              				unset($mid, $name);
              				$mid = $row['mid'];
              				$name = $row['name']; 
              				echo '<option value="'.$name.'">'.$name.'</option>'; 
						}
    					echo "</select>";
				?>

			<br>
			<br>
			Flowers and Decorations :
			<?php
						$sql ="SELECT did, name FROM deco";
						$result= mysqli_query($db,$sql); 
							
	    				echo "<select name='deco'>";
	    				echo '<option value="">Select a Decoration Partner</option>';
   						while ($row = mysqli_fetch_assoc($result)) {
              				unset($mid, $name);
              				$did = $row['did'];
              				$name = $row['name']; 
              				echo '<option value="'.$name.'">'.$name.'</option>'; 
						}
    					echo "</select>";
				?>

			<br>
			<br>
			Food Services
			<?php 
						$sql ="SELECT fid, name FROM food";
						$result= mysqli_query($db,$sql);
						
	    				echo "<select name='food'>";
	    				echo '<option value="">Select a Catering Service</option>';
   						while ($row = mysqli_fetch_assoc($result)) {
              				unset($mid, $name);
              				$fid = $row['fid'];
              				$name = $row['name']; 
              				echo '<option value="'.$name.'">'.$name.'</option>'; 
						}
    					echo "</select>";

    					echo "Pakage Type:";
    					echo "<input type='number' name='pkgtype'><br>";
    					echo "Number of plates:";
    					echo "<input type='number' name='plates'><br>";

    					mysqli_close($db);
				?>

			<br>
			<br>
			Other :
			<input type="text" name="other">
            <button type="submit" name="create" onsubmit="return empty()" >Create Event</button>
		</form>
        <form method="POST" action ="party.php">
            <button type="submit" name="logout" style="background-color: red;">Logout</button>
        </form>
    </div>


</body>
</html>