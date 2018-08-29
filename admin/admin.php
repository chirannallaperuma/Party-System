<!DOCTYPE html>
<html>
<head>
    <title>AVCJ Party</title>
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <link href= "../assets/css/style2.css" rel="stylesheet" type= "text/css">
</head>
<body>




<?php
session_start(); 
   
if(!isset($_SESSION['admin'])){
    header('location: ../signin.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('location: ../login.php');
}
include('../config/dbcon.php');
?>
<form method="POST" action ="admin.php">
            <button type="submit" name="logout" style="float: right;background-color: red;" >LOGOUT</button>
</form>

<form action="mainad.php">
        <button type="submit"style="float: right; margin-left: 30%; background-color: white;">Admin Main Page</button></a> <br>
</form>

		
<table style="margin-right: auto;margin-left: auto;">
	<td>
		<div class="admin">
			<form action="editform.php" method="post" name="photog" onsubmit="return ratecheck1()" >
				<p style="display: inline">Enter Name to delete or add: </p>
				<input type="text" name="name">
				<p style="display: inline">Enter Photo Price to add: </p>
				<input type="text" name="pprice">
                <p style="display: inline">Enter Video Price to add: </p>
                <input type="text" name="vprice">

				<button type="submit" name="pdelete" style="background-color: red;">Delete Vendor</button>
				<button type="submit" name="padd">Add new Vendor</button>
				
            </form>

            <hr>
            

            <form action="editform.php" method="post" name="cake" onsubmit="return ratecheck2()">
                <p style="display: inline">Enter Name to delete or add: </p>
                <input type="text" name="name">
                <p style="display: inline">Enter Price to add: </p>
                <input type="text" name="price">

                <button type="submit" name="cdelete" style="background-color: red;">Delete Cake Supplier</button>
                <button type="submit" name="cadd">Add new Cake supplier</button>
                
            </form>

            <hr>

            <form action="editform.php" method="post" name="tables" onsubmit="return ratecheck3()">
                <p style="display: inline">Enter Table Vendor: </p>
                <input type="text" name="name">
                <p style="display: inline">Enter Table Price to add: </p>
                <input type="text" name="tprice">
                <p style="display: inline">Enter Chair Price to add: </p>
                <input type="text" name="cprice">
                <p style="display: inline">Enter Tent Price to add: </p>
                <input type="text" name="tentprice">

                <button type="submit" name="tdelete" style="background-color: red;">Delete Table Vendor</button>
                <button type="submit" name="tadd">Add new Table Vendor</button>
            
            </form>

            <hr>

            <form action="editform.php" method="post" name="venue" onsubmit="return ratecheck4()">
                <p style="display: inline">Enter Venue Name to delete or add: </p>
                <input type="text" name="name">
                <p style="display: inline">Enter Price to add: </p>
                <input type="text" name="price">

                <button type="submit" name="vdelete" style="background-color: red;">Delete Venue</button>
                <button type="submit" name="vadd">Add new Venue</button>
                
            </form>

            <hr>


            <form action="editform.php" method="post" name="music" onsubmit="return ratecheck5()">
                <p style="display: inline">Enter Music Provider to delete or add: </p>
                <input type="text" name="name">
                <p style="display: inline">Enter Price to add: </p>
                <input type="text" name="price">

                <button type="submit" name="mdelete" style="background-color: red;">Delete Music Provider</button>
                <button type="submit" name="madd">Add new Music Provider</button>
                
            </form>

            <hr>


            <form action="editform.php" method="post" name="deco" onsubmit="return ratecheck7()">
                <p style="display: inline">Enter Decoration Partner to delete or add: </p>
                <input type="text" name="name">
                <p style="display: inline">Enter Price to add: </p>
                <input type="text" name="price">

                <button type="submit" name="ddelete" style="background-color: red;">Delete Decoration Partner</button>
                <button type="submit" name="dadd">Add new Decoration Partner</button>
                
            </form>

            <hr>

                
            <form action="editform.php" method="post" name="food" onsubmit="return ratecheck8()">
                <p style="display: inline">Enter Catering Service to delete or add: </p>
                <input type="text" name="name">
                <p style="display: inline">Enter Pkg.1 Price to add: </p>
                <input type="text" name="pkg1">
                <p style="display: inline">Enter Pkg.2 Price to add: </p>
                <input type="text" name="pkg2">
                <p style="display: inline">Enter Pkg.3 Price to add: </p>
                <input type="text" name="pkg3">

                <button type="submit" name="fdelete" style="background-color: red;">Delete Catering Service</button>
                <button type="submit" name="fadd">Add new Catering Service</button>
            </form>

            
        </div>
    </td>
    <td>
        <div class="admin">
            <form method="POST" action="admin.php">
                <button type="submit" name="vphoto" style="width: 100%">View Photo and Video</button>
                
                <button type="submit" name="vcake">View Cake Suppliers</button>
                <button type="submit" name="vtables">View Table Vendors</button>
                <button type="submit" name="vvenues">View Venues</button>
                <button type="submit" name="vmusic">View Music Providers</button>
                <button type="submit" name="vdeco">View Decoration Partners</button>
                <button type="submit" name="vfood">View Catering Services</button>
            </form>

            <br><br>
        
<?php

    if(isset($_POST['vphoto'])){    
    $query = "SELECT name,pprice,vprice FROM photo; ";
    $result3 = mysqli_query($db, $query);

    $qq = mysqli_num_rows($result3);

    if ($qq > 0 ){
        echo "<table id='table1'>
                <tr>
                    <th>Photographer Name</th>
                    <th>Photo. Price</th>
                    <th>Video. Price</th>
                </tr>
                ";
        while ($row = mysqli_fetch_assoc($result3)){
            $name=$row['name'];
            $pprice = $row['pprice'];
            $vprice=$row['vprice'];

            echo "<tr>
                    <td>".$name."</td>
                    <td>".$pprice."</td>
                    <td>".$vprice."</td>
                </tr>";
        }
        echo "</table>";
    }

        
    }
?>


<?php

    if(isset($_POST['vcake'])){    
    $query = "SELECT name,price FROM cakes; ";
    $result3 = mysqli_query($db, $query);

    $qq = mysqli_num_rows($result3);

    if ($qq > 0 ){
        echo "<table id='table1'>
                <tr>
                    <th>Cake Suuplier Name</th>
                    <th>Price</th>
                </tr>
                ";
        while ($row = mysqli_fetch_assoc($result3)){
            $name=$row['name'];
            $price=$row['price'];

            echo "<tr>
                    <td>".$name."</td>
                    <td>".$price."</td>
                </tr>";
        }
        echo "</table>";
    }

        
    }
?>
<?php

    if(isset($_POST['vtables'])){    
    $query = "SELECT * FROM tables; ";
    $result3 = mysqli_query($db, $query);

    $qq = mysqli_num_rows($result3);

    if ($qq > 0 ){
        echo "<table id='table1'>
                <tr>
                    <th>Table Vendor Name</th>
                    <th>Table Price</th>
                    <th>Chair Price</th>
                    <th>Tent Price</th>
                </tr>
                ";
        while ($row = mysqli_fetch_assoc($result3)){
            $name=$row['name'];
            $tprice = $row['tprice'];
            $cprice=$row['cprice'];
            $tentprice=$row['tentprice'];

            echo "<tr>
                    <td>".$name."</td>
                    <td>".$tprice."</td>
                    <td>".$cprice."</td>
                    <td>".$tentprice."</td>
                </tr>";
        }
        echo "</table>";
    }

        
    }
?>
<?php

    if(isset($_POST['vvenues'])){    
    $query = "SELECT name,price FROM venues; ";
    $result3 = mysqli_query($db, $query);

    $qq = mysqli_num_rows($result3);

    if ($qq > 0 ){
        echo "<table id='table1'>
                <tr>
                    <th>Venue Name</th>
                    <th>Price</th>
                </tr>
                ";
        while ($row = mysqli_fetch_assoc($result3)){
            $name=$row['name'];
            $price=$row['price'];

            echo "<tr>
                    <td>".$name."</td>
                    <td>".$price."</td>
                </tr>";
        }
        echo "</table>";
    }

        
    }
?>
<?php

    if(isset($_POST['vmusic'])){    
    $query = "SELECT name,price FROM music; ";
    $result3 = mysqli_query($db, $query);

    $qq = mysqli_num_rows($result3);

    if ($qq > 0 ){
        echo "<table id='table1'>
                <tr>
                    <th>Music and Light Provider Name</th>
                    <th>Price</th>
                </tr>
                ";
        while ($row = mysqli_fetch_assoc($result3)){
            $name=$row['name'];
            $price=$row['price'];

            echo "<tr>
                    <td>".$name."</td>
                    <td>".$price."</td>
                </tr>";
        }
        echo "</table>";
    }

        
    }
?>
<?php

    if(isset($_POST['vdeco'])){    
    $query = "SELECT name,price FROM deco; ";
    $result3 = mysqli_query($db, $query);

    $qq = mysqli_num_rows($result3);

    if ($qq > 0 ){
        echo "<table id='table1'>
                <tr>
                    <th>Decoration Partner Name</th>
                    <th>Price</th>
                </tr>
                ";
        while ($row = mysqli_fetch_assoc($result3)){
            $name=$row['name'];
            $price=$row['price'];

            echo "<tr>
                    <td>".$name."</td>
                    <td>".$price."</td>
                </tr>";
        }
        echo "</table>";
    }

        
    }
?>
<?php

    if(isset($_POST['vfood'])){    
    $query = "SELECT name,pkg1,pkg2,pkg3 FROM food; ";
    $result3 = mysqli_query($db, $query);

    $qq = mysqli_num_rows($result3);

    if ($qq > 0 ){
        echo "<table id='table1'>
                <tr>
                    <th>Food Provider Name</th>
                    <th>Pakage 1 Price</th>
                    <th>Pakage 2 Price</th>
                    <th>Pakage 3 Price</th>
                </tr>
                ";
        while ($row = mysqli_fetch_assoc($result3)){
            $name=$row['name'];
            $pkg1=$row['pkg1'];
            $pkg2=$row['pkg2'];
            $pkg3=$row['pkg3'];


            echo "<tr>
                    <td>".$name."</td>
                    <td>".$pkg1."</td>
                    <td>".$pkg2."</td>
                    <td>".$pkg3."</td>
                </tr>";
        }
        echo "</table>";
    }

        
    }
?>




    </td>        
</table>
        </div>



</body>
</html>