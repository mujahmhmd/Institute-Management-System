<?php
session_start();
require('config.php');

if (!isset ($_POST ['submit']))
{
    $username = $_POST["username"]; 
    $password = $_POST["password"];

$sql     = "SELECT * FROM teacher_login WHERE username='$username' AND password='$password'";

$result = mysqli_query($connection , $sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck > 0)
{

    $user=mysqli_fetch_assoc($result);
    $_SESSION['teacher_id'] = $user['username'];
    //echo "<script> alert('Login Successfully') </script>";
    echo "<script> window.location.assign('teacherhome.php')</script>";

}
else
{
    echo "<script> alert('Username Or Password Incorrect') </script>";
    echo "<script> window.location.assign('teacherLoginPage.php')</script>";
}
}
?>
