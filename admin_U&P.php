<?php
session_start();
require('config.php');
   

if (!isset ($_POST ['submit']))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";

$result = mysqli_query($connection , $sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck > 0)
{
    $user=mysqli_fetch_assoc($result);
    $_SESSION['admin_id'] = $user['username'];

   // echo "<script> alert ( 'Login Successfully') </script>" ;
    echo "<script> window.location.assign('home.php')</script>";

}
else
{
    echo "<script> alert ('Username Or Password Incorrect!!') </script>";
    echo "<script> window.location.assign('adminLoginPage.php')</script>";

}

}
?>
