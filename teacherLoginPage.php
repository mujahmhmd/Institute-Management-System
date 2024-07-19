<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['teacher_id']))
{
 header("location:teacherhome.php");
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
                <img src="teacherlogin.png" width="450px">

            </div>
            <div class="login-content">


                <form method="post" action="teacher_U&P.php">
                    <!-- < img src="avatar.svg"> -->
                    <h1 class="title">Teacher Login</h1>
                    <br>

                    <input type="text" placeholder="Username" name="username" required="">
                    <input type="password" placeholder="Password" name="password" required="">

                    <br>

                    <input type="submit" name="Login" value="Login" class="buttonLogin">


                    <div class="forgetPassword">
                        <a href="">
                            <h6>Forget Password?</h6>
                        </a>
                    </div>


                    <button class="buttonUserPage" type="button" onclick="location.href='adminLoginPage.php'">Admin</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="buttonUserPage" type="button" onclick="location.href='studentLoginPage.php'">Student</button>

                </form>
            </div>
        </div>

        <script type="text/javascript" src="js/main.js"></script>
    </body>

    </html>