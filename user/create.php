<?php
include('../config/authenticate.php');
include('../config/dbcon.php');

$name = ($_POST['name']);
$date = ($_POST['date']);
$nic = ($_POST['nic']);
$photo = ($_POST['photo']);
$video=($_POST['video']);
$cake = ($_POST['cake']);
$cpieces=($_POST['cpieces']);
$tables = ($_POST['tables']);
$tamount=($_POST['tamount']);
$camount=($_POST['camount']);
$tentamount=($_POST['tentamount']);
$venues = ($_POST['venues']);
$music = ($_POST['music']);
$deco = ($_POST['deco']);
$food = ($_POST['food']);
$pkgtype = ($_POST['pkgtype']);
$plates = ($_POST['plates']);
$other = ($_POST['other']);


if (isset($_POST['create'])) {
	
    $query = "INSERT INTO event 
    (name,date,nic,photo,video,cake,cpieces,tables,tamount,camount,tentamount,venues,music,deco,food,pkgtype,plates,other) 

				VALUES('$name','$date','$nic','$photo','$video','$cake','$cpieces','$tables','$tamount','$camount','$tentamount','$venues','$music','$deco','$food','$pkgtype','$plates','$other')";
			$sql=mysqli_query($db, $query);
			if(!$sql){
				die("connection error");
			}
			header('location:view.php');
}
?>