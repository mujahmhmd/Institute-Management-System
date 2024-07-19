<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['student_id']))
{
 header("location:studenthome.php");
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
            <img src="bg.svg" width="600px">

        </div>
        <div class="login-content">


            <form method="post" action="stu_U&P.php">
                <!-- < img src="avatar.svg"> -->
                <h1 class="title">Student Login</h1>
                <br>

                <input type="text" placeholder="Username" name="username" required="">
                <input type="password" placeholder="Password" name="password1" required="">

                <br>

                <input type="submit" name="Login" value="Login" class="buttonLogin">


                <div class="forgetPassword">

                    <a href="">
                        <h6>Forget Password?</h6>
                    </a>

                </div>

                <br>

                <h6 class="h6reg">Don't have an account? <a href="stuReg.html">Register here</a></h6>

                <button class="buttonUserPage" type="button" onclick="location.href='teacherLoginPage.php'">Teacher</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="buttonUserPage" type="button" onclick="location.href='adminLoginPage.php'">Admin</button>

            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>