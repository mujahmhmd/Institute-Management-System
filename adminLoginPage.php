
<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['admin_id']))
{
 header("location:home.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="login.css" rel="stylesheet">
    <script src="login.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <img class="wave" src="wave.png">
    <div class="container">
        <div class="img">
            <img src="adminlogin.png" width="400px">

        </div>
        <div class="login-content">


            <form method="post" action="admin_U&P.php">
                <!-- < img src="avatar.svg"> -->
                <h2 class="title">Admin Login</h2>
                <br>

                <input type="text" placeholder="Username" name="username" required="">
                <input type="password" placeholder="Password" name="password" required="">

                <br>

                <button type="submit" class="buttonLogin">Login</button>


                <div class="forgetPassword">
                    <a href="">
                        <h6>Forget Password?</h6>
                    </a>
                </div>


                <button class="buttonUserPage" type="button" onclick="location.href='studentLoginPage.php'">Student</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="buttonUserPage" type="button" onclick="location.href='teacherLoginPage.php'">Teacher</button>

            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>