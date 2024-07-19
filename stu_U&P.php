<?php
session_start();
require('config.php');

if (isset ($_POST ['username']))
{
    $username = $_POST["username"]; 
    $password = $_POST["password1"];



$sql     = "SELECT * FROM stu_reg WHERE username='$username' && password1='$password'";

$result = mysqli_query($connection , $sql);
$resultcheck = mysqli_num_rows($result);
echo $resultcheck;
if($resultcheck == 1 )
{
    $user=mysqli_fetch_assoc($result);
    $_SESSION['student_id'] = $user['id'];
    //echo "<script> alert('Login successfully') </script>";
    echo "<script> window.location.assign('studenthome.php')</script>";

}

else
{
    echo "<script> alert('Username Or Password Incorrect!!') </script>";
    echo "<script> window.location.assign('studentLoginPage.html')</script>";

}
}
?> 

