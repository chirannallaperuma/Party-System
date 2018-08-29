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
<?php

	if (isset($_POST['pdelete'])){
        $name=$_POST['name'];
        $sql1 = "DELETE FROM photo WHERE name='$name';";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {

            echo "<script>alert(\"Successfully deleted!\");</script>";
    
        }

    }
?>
<?php
    if (isset($_POST['padd'])){
        $name=$_POST['name'];
        $pprice=$_POST['pprice'];
        $vprice=$_POST['vprice'];
        $sql1 = "INSERT INTO photo(name,pprice,vprice)  VALUES ('$name','$pprice','$vprice');";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully added!\");</script>";
    
        }

    }
?>

<?php
    if (isset($_POST['cdelete'])){
        $name=$_POST['name'];
        $sql1 = "DELETE FROM cakes WHERE name='$name';";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
    if (isset($_POST['cadd'])){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $sql1 = "INSERT INTO cakes(name,price)  VALUES ('$name','$price');";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully added!\");</script>";
        }
    }
    
?>


<?php
    if (isset($_POST['tdelete'])){
        $name=$_POST['name'];
        $sql1 = "DELETE FROM tables WHERE name='$name';";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
    if (isset($_POST['tadd'])){
        $name=$_POST['name'];
        $tprice=$_POST['tprice'];
        $cprice=$_POST['cprice'];
        $tentprice=$_POST['tentprice'];
        $sql1 = "INSERT INTO tables(name,tprice,cprice,tentprice)  VALUES ('$name','$tprice','$cprice','$tentprice');";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully added!\");</script>";
        }
    }

?>

<?php
    if (isset($_POST['vdelete'])){
        $name=$_POST['name'];
        $sql1 = "DELETE FROM venues WHERE name='$name';";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
    if (isset($_POST['vadd'])){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $sql1 = "INSERT INTO venues(name,price)  VALUES ('$name','$price');";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully added!\");</script>";
        }
    }
    
?>

<?php
    if (isset($_POST['mdelete'])){
        $name=$_POST['name'];
        $sql1 = "DELETE FROM music WHERE name='$name';";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
    if (isset($_POST['madd'])){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $sql1 = "INSERT INTO music(name,price)  VALUES ('$name','$price');";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully added!\");</script>";
        }
    }
    
?>

<?php
    if (isset($_POST['ddelete'])){
        $name=$_POST['name'];
        $sql1 = "DELETE FROM deco WHERE name='$name';";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
    if (isset($_POST['dadd'])){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $sql1 = "INSERT INTO deco(name,price)  VALUES ('$name','$price');";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully added!\");</script>";
        }
    }
    
?>

<?php
    if (isset($_POST['fdelete'])){
        $name=$_POST['name'];
        $sql1 = "DELETE FROM food WHERE name='$name';";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
    if (isset($_POST['fadd'])){
        $name=$_POST['name'];
        $pkg1=$_POST['pkg1'];
        $pkg2=$_POST['pkg2'];
        $pkg3=$_POST['pkg3'];
        $sql1 = "INSERT INTO food(name,pkg1,pkg2,pkg3)  VALUES ('$name','$pkg1','$pkg2','$pkg3');";
        $result2 = mysqli_query($db,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully added!\");</script>";
        }
    }
header('location:admin.php');            
mysqli_close($db);
?>
