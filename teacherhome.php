<?php

use LDAP\Result;

include("config.php");


$query = "Select * from stu_reg";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);

if(!isset($_SESSION)){
    session_start();
}
if(empty($_SESSION['teacher_id']))
{
 header("location:teacherLoginPage.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" type="text/css" href="DashBoard.css">
    <link rel="stylesheet" href="studenthome.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="GIC">
                        <div class="line">&nbsp; &nbsp; Global International College</div> 
                        </span>

                    </a>
                    <a href="#">
                        <p class="logo-DB"><img src="Teacher.png" width="100px"></p>
                    </a><br>
                    <a href="#">
                        <p><span class="GIC"><div class="line">
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEACHER</b></div></span></p>
                    </a>

                </li>

                <li>
                    <a href="tstudetails.php">
                        <span class="icon"><ion-icon name="reader-sharp"></ion-icon></span>
                        <span class="title">Student Details
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
                        <span class="title">Make Assignment
                        </span>
                    </a>
                </li>

                <li>
                    <a href="Ttimetable.php">
                        <span class="icon"><ion-icon name="alarm-sharp"></ion-icon></span>
                        <span class="title">View Timetable</span>
                    </a>
                </li>

                <li>
                    <a href="tannouncement.php">
                        <span class="icon"><ion-icon name="reader-sharp"></ion-icon></span>
                        <span class="title">View Announcement</span>
                    </a>
                </li>


                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out-sharp"></ion-icon></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
 <!--  -->
 <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search -->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> 
                <!-- userImg -->
                <div class="user">
                    <img src="Teacher.png">
                </div>
            </div>
            <h2 style="padding-left: 20px; margin-top: 20px; color: #167e5c;">Welcome to Teacher Dashboard !!</h2>

            <div class="container_basic">
                <div class="sub">
                    <div class="vision_container">
                        <h2>Vision</h2>
                        Persuing excellence in education and character!
                    </div>
                </div>
                <div class="sub">
                    <div class="mission_container">
                        <h2>Mission</h2>
                        Total commitment and optimum use of the resources to obtain the best quality in eveyone!
                    </div>
                </div>
            </div>
            <div class="students-box" style="box-shadow: none; margin-top: 25px; ">
                <div class="stu_box_primary">
                    <div class="box-text" style="margin-top:70px;">
                        <h2>No. of Students</h2>
                    </div>
                    <div class="no-data-php">
                        <h3 style="margin-top:30px;">Total number of students:</h3>
                    </div>
                </div>
                <div class="stu_count">
                    <h1 class="number" name="student-count"  style="color: white; font-weight: 500; margin-top: 30px; margin-left: 300px;">
                        0<?= $count; ?>
                    </h1>
                </div>
            </div>
    
        </div>
        
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        // MenuToggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        // add hovered class on selected list item
        let list = document.querySelectorAll('.navigation li');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered')
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>
</body>

</html>