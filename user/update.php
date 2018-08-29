<!DOCTYPE html>
<html>
<head>
	<title>AVCJ Party</title>
	<link href= "../assets/css/style2.css" rel="stylesheet" type= "text/css">
	<script type="text/javascript" src="../assets/js/script.js"></script>
</head>
<body>

	
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

	?>
<div class="frm" style="height: 1540px;">
		<form method="post" action="update.php">
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

    				if(isset($_POST['uphoto'])){
						$photo=($_POST['photo']);

						$query="UPDATE event SET photo='$photo' ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
}
				?>
				<button type="submit" name="uphoto" style="width: 50%">Update</button>
			</form>
				
			<hr>

			<form method="post" action="update.php">
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

    				if(isset($_POST['uvideo'])){
						$video=($_POST['video']);

						$query="UPDATE event SET video='$video' ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
}
				?>
				<button type="submit" name="uvideo" style="width: 50%">Update</button>
			</form>
				
			<hr>

			<form method="post" action="update.php" name="upcake" onsubmit="return updatecheck3()">
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

    			echo "Cake Pieces
    				<input type='number' name='cpieces'><br>";


				if(isset($_POST['ucake'])){
						$cake=($_POST['cake']);
						$cpieces=($_POST['cpieces']);

						$query="UPDATE event SET cake='$cake', cpieces='$cpieces' ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
}
				?>
				<button type="submit" name="ucake" style="width: 50%">Update</button>
			</form>
			<hr>

			<form method="post" action="update.php" name="utable" onsubmit="return updatecheck()">
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
				
			echo"Table Amount:
				<input type='number' name='tamount'><br>
			Chair Amount:
				<input type='number' name='camount'><br>
			Tent Amount:
				<input type='number' name='tentamount'><br>";
				

				if(isset($_POST['utables'])){
						$tables=($_POST['tables']);
						$tamount=($_POST['tamount']);
						$camount=($_POST['camount']);
						$tentamount=($_POST['tentamount']);

						$query="UPDATE event SET tables='$tables',camount='$camount',tamount='$tamount',tentamount='$tentamount' ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
}
				?>
				<button type="submit" name="utables" style="width: 50%">Update</button>
			</form>

			<hr>
			<form method="post" action="update.php">
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
				
				if(isset($_POST['uvenue'])){
						$venues=($_POST['venues']);

						$query="UPDATE event SET venues='$venues'ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
						}
				?>
				<button type="submit" name="uvenue" style="width: 50%">Update</button>
			</form>

			<hr>
			<form method="post" action="update.php">
			Lighting and Music :
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

    					if(isset($_POST['umusic'])){
						$music=($_POST['music']);

						$query="UPDATE event SET music='$music' ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
}
				?>
				<button type="submit" name="umusic" style="width: 50%">Update</button>
			</form>
				

			<hr>
			<form method="post" action="update.php">
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

    					if(isset($_POST['udeco'])){
						$deco=($_POST['deco']);

						$query="UPDATE event SET deco='$deco'ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
}
				?>
				<button type="submit" name="udeco" style="width: 50%">Update</button>
			</form>
				

			<hr>
			<form method="post" action="update.php" name="ufood" onsubmit="return updatecheck2()">
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

    					if(isset($_POST['ufood'])){
						$food=($_POST['food']);
						$pkgtype=($_POST['pkgtype']);
						$plates=($_POST['plates']);

						$query="UPDATE event SET food='$food',pkgtype='$pkgtype',plates='$plates' ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
}
				?>
				<button type="submit" name="ufood" style="width: 50%">Update</button>
			</form>
	

			<hr>
			<form method="post" action="update.php">
			Other :
			<input type="text" name="other">
			<?php
            if(isset($_POST['uother'])){
						$other=($_POST['other']);
						

						$query="UPDATE event SET other='$other' ORDER BY eventid DESC LIMIT 1;";
						$sql=mysqli_query($db, $query);
}
				?>
				<button type="submit" name="uother" style="width: 50%;">Update</button>
				
			</form>
        <form method="POST" action ="view.php">
            <button type="submit" style="background-color: red; width:50%;">Finish</button>
        </form>
    </div>




?>
</body>
</html>