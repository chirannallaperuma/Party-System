<?php
session_start();
include('dbcon.php');



if(isset($_POST['login'])){
    $nic= $_POST['nic'];
    $password=md5($_POST['password']);
    $query = "SELECT * from users WHERE nic='$nic' AND password = '$password'";
    $results = mysqli_query($db, $query);


    if (mysqli_num_rows($results) == 1)
    {
        if ($nic=='1312445v' AND $password==md5('12345'))
            {
            $_SESSION['admin'] = $nic;
            header('location:../admin/mainad.php');
            }

        elseif ($nic=='ucsc2' AND $password==md5('ucsc2'))
            {
            $_SESSION['admin'] = $nic;
            header('location:../admin/mainad.php');
            }

        else{
            $_SESSION['user'] = $nic;
            header('location:../user/party.php');
            }
    }
    else{
        header('location:../signin.php');
    }
}

?>