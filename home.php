<?php
include("config.php");

if(!isset($_SESSION)){
    session_start();
}
if(empty($_SESSION['admin_id']))
{
 header("location:adminLoginPage.php");
}


use LDAP\Result;

$query1 = "Select * from teacher_reg";
$result1 = mysqli_query($connection, $query1);
$count = mysqli_num_rows($result1);

$query2 = "Select * from stu_reg";
$result2 = mysqli_query($connection, $query2);
$count2 = mysqli_num_rows($result2);


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="DashBoard.css">
    <link href="https://cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.syncfusion.com/ej2/ej2-buttons/styles/material.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.syncfusion.com/ej2/ej2-calendars/styles/material.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.syncfusion.com/ej2/ej2-calendars/dist/global/ej2-calendars.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-base/dist/global/ej2-base.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-inputs/dist/global/ej2-inputs.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-buttons/dist/global/ej2-buttons.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-lists/dist/global/ej2-lists.min.js" type="text/javascript"></script>
    <script src="https://cdn.syncfusion.com/ej2/ej2-popups/dist/global/ej2-popups.min.js" type="text/javascript"></script>
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
                        <p class="logo-DB"><img src="Admin.png" width="100px"></p>
                    </a><br>
                    <a href="#">
                        <p><span class="GIC"><div class="line">
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN</b></div></span></p>
                    </a>

                </li>

                <li>
                    <a href="student_details.php">
                        <span class="icon"><ion-icon name="reader-sharp"></ion-icon></span>
                        <span class="title">Student Details 
                        </span>

                    </a>
                </li>

                <li>
                    <a href="Teacher_details.php">
                        <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
                        <span class="title">Teachers Details
                        </span>
                    </a>
                </li>

                <li>
                    <a href="timeTable.php">
                        <span class="icon"><ion-icon name="alarm-sharp"></ion-icon></span>
                        <span class="title">Make Timetable</span>
                    </a>
                </li>

                <li>
                    <a href="announcement.php">
                        <span class="icon"><ion-icon name="list-sharp"></ion-icon></span>
                        <span class="title">Make Announcement</span>
                        <span class="title"></span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out-sharp"></ion-icon></span>
                        <span class="title" >Logout</span>
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
                    <img src="Admin.png">
                </div>
            </div>

            <div class="insights">
                <h1 style="margin: 10px; margin-left: 230px; margin-top: 5px; margin-bottom: 15px; color: #167e5c;">WELCOME TO ADMIN DASHBOARD</h1>
                <div class="col2">
                    <div class="teachers-box">
                        <div class="teacher_box_primary">
                            <div class="box-text" style="margin-top: 70px;">
                                <h2>No. of Teachers</h2>
                            </div>
                            <div class="no-data-php">
                                <h3 style="margin-top:30px;">Total number of Teachers</h3>
                            </div>
                        </div>
                        <div class="teacher_count" style=" margin-left: 250px; margin-top: 30px;" >
                            <h1 class="number" name="teacher-count">0<?= $count; ?></h1>
                        </div>
                    </div>
                    
                    <div class="students-box">
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
                                0<?= $count2; ?>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="col3" id="element">
                    <div class="vision" style="text-align:center;  margin: 10px; margin-left:20px ; margin-top: 40px;">
                        <h1 class="vision-heading">Vision</h1>
                        <div>
                            <h2 class="vision-sub-heading">Persuing excellence in education and character!</h2>
                        </div>
                    </div>
                    <div class="mission" style="text-align: center; margin: 10px; margin-top: 40px; margin-left: 500px;">
                        <h1 class="mission-heading">Mission</h1>
                        <div>
                            <h2 class="mission-sub-heading">Total commitment and optimum use of the resources to obtain the best quality in eveyone!</h2>
                        </div>
                    </div>
                </div>
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